<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameController;
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
Route::get('/login', function () {})->name('login');
