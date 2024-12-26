<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (!Gate::allows('admin-only')) {
            abort(403, 'Unauthorized access!');
        }

        $games = Game::all();
        $categories = Category::all();

        return view('admin-dashboard', [
            "games" => $games,
            "categories" => $categories
        ]);
    }
}
