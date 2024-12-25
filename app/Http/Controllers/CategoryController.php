<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $categories = Category::all();
        return view("category-show", ["category" => $category, "categories" => $categories]);
    }
}
