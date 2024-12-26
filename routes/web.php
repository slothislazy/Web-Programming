<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#Game Controller
Route::get('/home', [GameController::class, 'index'])->name('game.index');
Route::get('/create-game', [GameController::class, 'create'])->name('game.create');
Route::get('/game/{game}', [GameController::class, 'show'])->name('game.show');
Route::POST('/store-game', [GameController::class, 'store'])->name('game.store');

#Category Controller
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

#Authentication Controller
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::POST('/authenticate', [AuthController::class, 'authenticate'])->middleware('guest')->name('authenticate');
Route::POST('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

#Registration Controller
Route::get('/register', [RegistrationController::class, 'register'])->name('register');
Route::POST('/store-register', [RegistrationController::class, 'store'])->name('register.store');

#Cart Controller
Route::get('/view-cart', [CartController::class, 'view_cart'])->middleware('auth')->name('cart.view');
Route::POST('/cart/add/{game_id}', [CartController::class, 'add_to_cart'])->middleware('auth')->name('cart.add');
Route::DELETE('/cart/delete/{item_id}', [CartController::class, 'remove_from_cart'])->middleware('auth')->name('cart.remove');
