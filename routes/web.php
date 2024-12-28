<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('game.index');
});

#Game Controller
Route::get('/home', [GameController::class, 'index'])->name('game.index');
Route::get('/create-game', [GameController::class, 'create'])->name('game.create');
Route::get('/game/{game}', [GameController::class, 'show'])->name('game.show');
Route::POST('/store-game', [GameController::class, 'store'])->name('game.store');
Route::DELETE('/delete-game/{game_id}', [GameController::class, 'delete'])->name('game.delete');
Route::get('/edit-game/{game}', [GameController::class, 'edit'])->name('game.edit');
Route::PATCH('/update-game/{game}', [GameController::class, 'update'])->name('game.update');

#Category Controller
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/create-category', [CategoryController::class, 'create'])->name('category.create');
Route::POST('/store-category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/edit-category{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::PATCH('/update-category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::DELETE('/delete-category/{category_id}', [CategoryController::class, 'delete'])->name('category.delete');

#Authentication Controller
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->middleware('guest')->name('login');
Route::POST('/authenticate', [AuthController::class, 'authenticate'])->middleware('guest')->name('authenticate');
Route::POST('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

#Registration Controller
Route::get('/register', [RegistrationController::class, 'register'])->name('register');
Route::POST('/store-register', [RegistrationController::class, 'store'])->name('register.store');

#Cart Controller
Route::get('/view-cart', [CartController::class, 'view_cart'])->middleware('auth')->name('cart.view');
Route::POST('/cart/add/{game_id}', [CartController::class, 'add_to_cart'])->middleware('auth')->name('cart.add');
Route::DELETE('/cart/delete/{item_id}', [CartController::class, 'remove_from_cart'])->middleware('auth')->name('cart.remove');

#Admin Controller
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

#Review Controller
Route::POST('/game/{game}/rate', [ReviewController::class, 'store'])->middleware('auth')->name('game.rate');
