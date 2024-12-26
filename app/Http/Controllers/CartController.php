<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function view_cart()
    {
        $cart = Cart::where('user_id', Auth::id())->firstOrCreate(['user_id' => Auth::id()]);
        $total = $cart->items->sum(function ($item) {
            return $item->game->price;
        });
        return view('show-cart', ['cart' => $cart, 'total' => $total]);
    }

    public function add_to_cart(Request $request, $game_id)
    {
        $cart = Cart::where('user_id', Auth::id())->firstOrCreate(['user_id' => Auth::id()]);

        $exists = $cart->items()->where('game_id', $game_id)->exists();

        if (!$exists) {
            $cart->items()->create(['game_id' => $game_id]);
        } else {
            return redirect(route('cart.view'))->with('message', 'Game Already in Cart!');
        }

        return redirect(route('cart.view'))->with('message', 'Game Added to Cart!');
    }

    public function remove_from_cart($item_id)
    {
        CartItem::findOrFail($item_id)->delete();
        return redirect(route('cart.view'));
    }
}
