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

        $tab = request('tab', 'games');

        if ($tab == 'games') {
            $items = Game::all();
        } elseif ($tab == 'categories') {
            $items = Category::all();
        } else {
            abort(404);
        }

        return view('admin-dashboard', [
            "items" => $items,
            "tab" => $tab
        ]);
    }
}
