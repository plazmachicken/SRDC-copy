<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(10); // Paginate the categories with 10 items per page
        return view('admin.category.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags|max:255',
            'description' => 'required'
        ]);

       $category = Category::create($request->all());

         // Log the category creation
         Log::info('Category Created', [
            'category_id' => $category->id,
            'name' => $category->name,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('categories.index')
            ->with('success', 'Tag created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all());

         // Log the category updated
         Log::info('Category Updated', [
            'category_id' => $category->id,
            'name' => $category->name,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('categories.index')
            ->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);


         // Log the category updated
         Log::info('Category Deleted', [
            'category_id' => $category->id,
            'name' => $category->name,
            'user_id' => auth()->user()->id,
        ]);

        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully');
    }

    public function CategorySearch(Request $request)
    {
        // Get the search query parameters
        $id = $request->input('id');
        $name = $request->input('name');
        $description = $request->input('description');

        // Query users based on the search parameters
        $categories = Category::query();

        if (!empty($id)) {
            $categories->where('id', $id);
        }

        if (!empty($name)) {
            $categories->where('name', 'like', '%' . $name . '%');
        }

        if (!empty($description)) {
            $categories->where('description', 'like', '%' . $description . '%');
        }

        // Fetch the categories based on the search criteria
        $categories = $categories->paginate(10);

        // Return the view with search results

        return view('admin.category.index', compact('categories'));

    }
}
