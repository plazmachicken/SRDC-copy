<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::paginate(10);
        return view('admin.tag.index', compact('tags'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tag.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags|max:255',
        ]);

       $tag = Tag::create($request->all());
        // Log the Tag created
        Log::info('Tag Created', [
            'tag_id' => $tag->id,
            'name' => $tag->name,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('tags.index')
            ->with('success', 'Tag created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tag.show', compact('tag'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:tags|max:255',
        ]);

        $tag = Tag::findOrFail($id);
        $tag->update($request->all());

        // Log the Tag updated
        Log::info('Tag Updated', [
            'tag_id' => $tag->id,
            'name' => $tag->name,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('tags.index')
            ->with('success', 'Tag updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tag = Tag::findOrFail($id);


        // Log the Tag deleted
        Log::info('Tag Deleted', [
            'tag_id' => $tag->id,
            'name' => $tag->name,
            'user_id' => auth()->user()->id,
        ]);

        $tag->delete();

        return redirect()->route('tags.index')
            ->with('success', 'Tag deleted successfully');
    }

    public function TagSearch(Request $request)
    {
        // Get the search query parameters
        $id = $request->input('id');
        $name = $request->input('name');

        // Query users based on the search parameters
        $tags = Tag::query();

        if (!empty($id)) {
            $tags->where('id', $id);
        }

        if (!empty($name)) {
            $tags->where('name', 'like', '%' . $name . '%');
        }


        // Fetch the tags based on the search criteria
        $tags = $tags->paginate(10);

        // Return the view with search results

        return view('admin.tag.index', compact('tags'));

    }
}
