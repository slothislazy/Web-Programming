<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GameController extends Controller
{
    //
    public function index()
    {
        $featured_games = Game::where('featured', true)->get();
        $categories = Category::all();
        $games = Game::all();

        return view('home', [
            "games" => $games,
            "categories" => $categories,
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('create-game', [
            "categories" => $categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "developer" => "required",
            "price" => "required",
            "category_id" => "required",
            "release_date" => "required",
            "image" => "required"
        ]);

        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->title . '-' . $request->category . '.' . $extension;
        $request->file('image')->storeAs('/thumbnails', $filename, 'public');

        Game::create([
            "title" => $request->title,
            "developer" => $request->developer,
            "price" => $request->price,
            "category_id" => $request->category_id,
            "image" => $filename,
            "release-date" => new Carbon($request->release_date)
        ]);

        // return redirect(route('game.index'));
        return redirect(route("game.index", ["title" => "Homepage"]));
    }

    public function show(Game $game)
    {
        $similar_games = Game::where('category_id', $game->category->id)->get();
        return view('game-show', [
            "game" => $game,
            "similar_games" => $similar_games
        ]);
    }
}
