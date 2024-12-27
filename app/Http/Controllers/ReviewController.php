<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, Game $game)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Check if the user has already rated this game
        $review = Review::updateOrCreate(
            ['game_id' => $game->id, 'user_id' => Auth::id()],
            ['game_id' => $game->id, 'user_id' => Auth::id(), 'rating' => $request->rating]
        );

        return redirect()->back();
    }
}
