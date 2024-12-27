<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
        if (!Gate::allows('admin-only')) {
            return abort(403, "Unauthorized Access");
        }

        $categories = Category::all();

        return view('create-game', [
            "categories" => $categories
        ]);
    }

    public function store(Request $request)
    {
        if (!Gate::allows('admin-only')) {
            return abort(403, "Unauthorized Access");
        }
        $request->validate([
            "title" => "required",
            "developer" => "required",
            "price" => "required",
            "category_id" => "required",
            "release_date" => "required",
            "image" => "required",
            "description" => "required|min:5|max:255"
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
            "release_date" => new Carbon($request->release_date),
            "description" => $request->description
        ]);

        return redirect(route("game.index"));
    }

    public function edit(Game $game)
    {
        if (!Gate::allows('admin-only')) {
            return abort(403, "Unauthorized Access");
        }
        return view('edit-game', [
            'game' => $game,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Game $game)
    {
        if (!Gate::allows('admin-only')) {
            return abort(403, "Unauthorized Access");
        }
        $request->validate([
            "title" => "required",
            "developer" => "required",
            "price" => "required",
            "category_id" => "required",
            "release_date" => "required",
            "image" => "required",
            "description" => "required|min:5|max:255"
        ]);

        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->title . '-' . $request->category . '.' . $extension;
        $request->file('image')->storeAs('/thumbnails', $filename, 'public');

        $game->update([
            "title" => $request->title,
            "developer" => $request->developer,
            "price" => $request->price,
            "category_id" => $request->category_id,
            "image" => $filename,
            "release_date" => new Carbon($request->release_date),
            "description" => $request->description
        ]);

        return redirect(route("admin.dashboard"));
    }

    public function show(Game $game)
    {
        $similar_games = Game::where('category_id', $game->category->id)->where('id', '!=', $game->id)->get();
        return view('game-show', [
            "game" => $game,
            "similar_games" => $similar_games
        ]);
    }

    public function delete($game_id)
    {
        Game::findOrFail($game_id)->delete();

        return redirect(route('admin.dashboard'));
    }
}
