<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewPostNotification;
use Illuminate\Support\Facades\Log;
use Google\Cloud\Translate\V2\TranslateClient;


use function PHPUnit\Framework\isNull;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['comment', 'UserPostcreate']); // Apply auth middleware to all methods except publicMethod

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(12);

        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.add', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'category' => 'required',
            'tag' => 'required',
            'title' => 'required',
            'editor' => 'required',
        ]);

        $post = new Post;

        if (!is_null($request->images)) {
            $request->validate([
                'images.*' => 'image|mimes:jpeg,jpg,png,gif,bmp,webp,svg,tiff|max:2048', // Validate images
            ]);


            $imageNames = []; // Array to store image names

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images/post'), $imageName);
                    $imageNames[] = $imageName; // Save each image name
                }

                $post->image = json_encode($imageNames);
            }
        }


        $post->category_id = $request->category;
        $post->title = $request->title;
        $post->content = $request->editor;
        $post->active = false;
        $post->user_id = Auth::user()->id;
        $post->tags = json_encode($request->tag); // Store tag IDs as JSON array
        $post->save();

        // Log the post creation
        Log::info('Post Created', [
            'post_id' => $post->id,
            'title' => $post->title,
            'user_id' => $post->user_id,
        ]);

        if (Auth::user()->role == '1' || Auth::user()->role == '2') {
            return redirect()->route('posts.index')
                ->with('success', 'Post created successfully');
        } else {
            return redirect()->route('user.forum')
                ->with('success', 'Post created successfully');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();
        if (Auth::user()->role == '1' || Auth::user()->role == '2') {
            return view('admin.post.edit', compact('post', 'categories', 'tags'));

        } else {
            return view('user.edit-post', compact('post', 'categories', 'tags'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $request->validate([
            'category' => 'required',
            'tag' => 'required',
            'title' => 'required',
            'editor' => 'required',
        ]);
        // dd($request->tag);

        if (!is_null($request->images)) {
            $request->validate([
                'images.*' => 'image|mimes:jpeg,jpg,png,gif,bmp,webp,svg,tiff|max:2048', // Validate images
            ]);


            $imageNames = []; // Array to store image names

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images/post'), $imageName);
                    $imageNames[] = $imageName; // Save each image name
                }

                $post->image = json_encode($imageNames);
            }
        }

        $post->category_id = $request->category;
        $post->title = $request->title;
        $post->content = $request->editor;
        $post->active = false;
        // $post->user_id = Auth::user()->id;
        $post->tags = json_encode($request->tag); // Store tag IDs as JSON array
        $post->save();

        Log::info('Post Updated', [
            'post_id' => $post->id,
            'title' => $post->title,
            'user_id' => $post->user_id,
        ]);

        if (Auth::user()->role == '1' || Auth::user()->role == '2') {
            return redirect()->route('posts.index')
                ->with('success', 'Post updated successfully');
        } else {
            $user = User::findOrFail($post->user_id);
            return redirect()->route('user.mypost', $user)
                ->with('success', 'Post updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        Log::info('Post Deleted', [
            'post_id' => $post->id,
            'title' => $post->title,
            'user_id' => $post->user_id,
        ]);

        return redirect()->back()->with('success', 'Post deleted successfully');

    }

    public function activate(Post $post)
    {

        if ($post->active == true) {
            $post->active = false; // Assuming you have an 'active' column in your 'posts' table
            $post->save();

            Log::info('Post Status Updated', [
                'post_id' => $post->id,
                'title' => $post->title,
                'user_id' => $post->user_id,
                'status' => $post->active,
            ]);

            return redirect()->back()->with('success', 'Post deactivated successfully');
        } elseif ($post->active == false) {
            $post->active = true; // Assuming you have an 'deactive' column in your 'posts' table
            $post->save();

            Log::info('Post Status Updated', [
                'post_id' => $post->id,
                'title' => $post->title,
                'user_id' => $post->user_id,
                'status' => $post->active,
            ]);


            // Trigger notifications to all users
            $users = User::all();
            foreach ($users as $user) {
                $user->notify(new NewPostNotification($post));
            }

            return redirect()->back()->with('success', 'Post activated successfully');
        }

    }

    public function PostShow(string $id)
    {
        $post = Post::findOrFail($id);
        $tagIds = json_decode($post->tags); // Decode the JSON string into an array of tag IDs
        $tags = Tag::whereIn('id', $tagIds)->pluck('name'); // Retrieve tag names corresponding to the IDs
        // Check if the user has already viewed this post within the last hour
        $cacheKey = 'post_view_' . $id . '_' . request()->ip();
        $viewed = Cache::has($cacheKey);

        if (!$viewed) {
            // Increment view count
            $post->increment('views');

            // Cache the view to prevent further increments for a certain time
            Cache::put($cacheKey, true, now()->addHour());
        }
        return view('admin.post.show', compact('post', 'tags'));

    }

    public function UserPostShow(string $id)
    {
        $post = Post::where('id', $id)->where('active', true)->first();
        if ($post == null) {
            return redirect()->route('user.forum');
        } else {
            $tagIds = json_decode($post->tags); // Decode the JSON string into an array of tag IDs
            $tags = Tag::whereIn('id', $tagIds)->pluck('name'); // Retrieve tag names corresponding to the IDs
            // Check if the user has already viewed this post within the last hour
            $cacheKey = 'post_view_' . $id . '_' . request()->ip();
            $viewed = Cache::has($cacheKey);

            if (!$viewed) {
                // Increment view count
                $post->increment('views');

                // Cache the view to prevent further increments for a certain time
                Cache::put($cacheKey, true, now()->addHour());
            }
            return view('user.post', compact('post', 'tags'));

        }



    }

    public function Forum()
    {
        $posts = Post::orderBy('created_at', 'desc')->where('active', true)->paginate(12);
        $topCategories = Post::where('active', true)->select('category_id', DB::raw('COUNT(*) as count'))
            ->groupBy('category_id')
            ->orderByDesc('count')
            ->limit(5)
            ->get();
        // Assuming $categories contains category_id and count
        $categoryIds = $topCategories->pluck('category_id');

        $categoriesWithNames = Category::whereIn('id', $categoryIds)
            ->select('id', 'name')
            ->get()
            ->keyBy('id'); // Index categories by their IDs for easy access
        return view('user.forum', compact('posts', 'categoriesWithNames', 'topCategories'));
    }

    public function like(Post $post)
    {
        $user = User::findOrFail(Auth::user()->id);

        // Check if the user has already liked the post
        if ($user->likes()->where('post_id', $post->id)->exists()) {
            return redirect()->back()->with('error', 'You have already liked this post');
        }

        // Increment the post's like count
        $post->increment('likes');

        // Create a new like record for the user and post
        $like = new Like();
        $like->user_id = $user->id;
        $like->post_id = $post->id;
        $like->save();

        // Log the like action
        Log::info('Post Liked', [
            'user_id' => $user->id,
            'post_id' => $post->id,
            'like_id' => $like->id,
            'timestamp' => now()
        ]);


        return redirect()->back()->with('success', 'Post liked successfully');
    }

    public function unlike(Post $post)
    {
        $user = User::findOrFail(Auth::user()->id);

        // Check if the user has already liked the post
        $like = $user->likes()->where('post_id', $post->id)->first();

        if (!$like) {
            return redirect()->back()->with('error', 'You have not liked this post');
        }

        // Decrement the post's like count
        $post->decrement('likes');

        // Log the like action
        Log::info('Post UnLiked', [
            'user_id' => $user->id,
            'post_id' => $post->id,
            'like_id' => $like->id,
            'timestamp' => now()
        ]);

        // Delete the like record
        $like->delete();



        return redirect()->back()->with('success', 'Post unliked successfully');
    }

    public function comment(Request $request, Post $post, Comment $parentComment = null)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $post->id;
        $comment->content = $request->content;

        // Set parent comment if provided
        if (!is_null($request->parent_comment_id)) {
            $request->validate([
                'parent_comment_id' => 'required',
            ]);
            $comment->parent_comment_id = $request->parent_comment_id;
        }

        $comment->save();

        // Log the comment action
        Log::info('Comment Posted', [
            'user_id' => $comment->user_id,
            'post_id' => $comment->post_id,
            'comment_id' => $comment->id,
            'timestamp' => now()
        ]);

        return redirect()->back()->with('success', 'Comment added successfully');
    }

    public function UserPostcreate()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('user.create-post', compact('categories', 'tags'));
    }

    public function UserPostSearch(Request $request)
    {
        // Assuming $categories contains category_id and count
        $topCategories = Post::select('category_id', DB::raw('COUNT(*) as count'))
            ->groupBy('category_id')
            ->orderByDesc('count')
            ->limit(5)
            ->get();
        $categoryIds = $topCategories->pluck('category_id');
        $categoriesWithNames = Category::whereIn('id', $categoryIds)
            ->select('id', 'name')
            ->get()
            ->keyBy('id'); // Index categories by their IDs for easy access
        $posts = Post::orderBy('created_at', 'desc')->where('title', 'like', '%' . $request->title . '%')->paginate(12);
        return view('user.forum', compact('posts', 'categoriesWithNames', 'topCategories'));

    }

    public function UserPostSearchByCategory(string $category)
    {
        $posts = Post::orderBy('created_at', 'desc')->where('active', true)->where('category_id', $category)->paginate(12);

        // Assuming $categories contains category_id and count
        $topCategories = Post::where('active', true)
            ->select('category_id', DB::raw('COUNT(*) as count'))
            ->groupBy('category_id')
            ->orderByDesc('count')
            ->limit(5)
            ->get();
        $categoryIds = $topCategories->pluck('category_id');
        $categoriesWithNames = Category::whereIn('id', $categoryIds)
            ->select('id', 'name')
            ->get()
            ->keyBy('id'); // Index categories by their IDs for easy access

        return view('user.forum', compact('posts', 'categoriesWithNames', 'topCategories'));

    }

    public function UserMyPost(User $user)
    {
        // dd($user);
        $posts = Post::orderBy('created_at', 'desc')->where('user_id', $user->id)->paginate(12);

        // Assuming $categories contains category_id and count
        $topCategories = Post::where('active', true)->select('category_id', DB::raw('COUNT(*) as count'))
            ->groupBy('category_id')
            ->orderByDesc('count')
            ->limit(5)
            ->get();
        $categoryIds = $topCategories->pluck('category_id');
        $categoriesWithNames = Category::whereIn('id', $categoryIds)
            ->select('id', 'name')
            ->get()
            ->keyBy('id'); // Index categories by their IDs for easy access

        return view('user.mypost', compact('posts', 'topCategories', 'categoriesWithNames'));
    }



    public function translateContent(Request $request)
    {
        $content = $request->input('content');
        $language = $request->input('language');

        $translate = new TranslateClient([
            'projectId' => env('GOOGLE_CLOUD_PROJECT_ID'),
        ]);

        $result = $translate->translate($content, [
            'target' => $language,
        ]);

        return response()->json(['translatedContent' => $result['text']]);
    }

}
