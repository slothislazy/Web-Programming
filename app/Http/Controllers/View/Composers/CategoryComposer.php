<?php

namespace App\Http\Controllers\View\Composers;

use Illuminate\View\View;
use App\Models\Category;

class CategoryComposer
{
    public function compose(View $view)
    {
        $categories = Category::all(); // Fetch categories
        $view->with('categories', $categories); // Share with view
    }
}
