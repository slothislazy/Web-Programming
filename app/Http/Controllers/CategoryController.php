<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $categories = Category::all();
        return view("category-show", ["category" => $category, "categories" => $categories]);
    }

    public function create()
    {
        return view('create-category');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3'
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect(route('admin.dashboard', ['tab' => 'categories']));
    }

    public function edit(Category $category)
    {
        return view('edit-category', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|min:3'
        ]);

        $category->update([
            'name' => $request->name
        ]);

        return redirect(route('admin.dashboard', ['tab' => 'categories']));
    }

    public function delete($category_id)
    {
        Category::findOrFail($category_id)->delete();

        return redirect(route('admin.dashboard', ['tab' => 'categories']));
    }
}
