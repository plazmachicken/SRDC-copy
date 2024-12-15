<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    //
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function UserProfile(string $id)
    {
        $user = User::findOrFail($id);

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
        return view('user.profile', compact('user', 'topCategories', 'categoriesWithNames'));
    }

    public function downloadCertificate($filename)
    {
        $filePath = public_path('assets/certificate/' . $filename);

        if (file_exists($filePath)) {
            return Response::download($filePath);
        }
        return response()->json(['error' => 'File not found'], 404);
    }

}
