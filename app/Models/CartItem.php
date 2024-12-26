<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        "cart_id",
        "game_id"
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
