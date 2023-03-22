<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

// Socialite auth

Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('google-login');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::get('auth/apple', [LoginController::class, 'redirectToApple']);
Route::get('auth/apple/callback', [LoginController::class, 'handleAppleCallback']);
Route::middleware(['language'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('lang-ar', function () {
        session()->put('lang', 'ar');
        return back();
    })->name('lang-ar');

    Route::get('lang-en', function () {
        session()->put('lang', 'en');
        return back();
    })->name('lang-en');



//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->middleware(['auth', 'verified'])->name('dashboard');



    Route::middleware('auth')->group(function () {
        Route::get('/my-profile', [ProfileController::class, 'show'])->name('my-profile');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/orders', [OrderController::class, 'index'])->name('orders');

        Route::get('create_order',[OrderController::class, 'create'])->name('orders.create');

        Route::post('store_order',[OrderController::class, 'store'])->name('orders.store');

        Route::get('/chat', [OrderController::class, 'index'])->name('chat');
        Route::get('/notifications', [OrderController::class, 'index'])->name('notifications');
        Route::get('/request', [OrderController::class, 'create'])->name('request');
    });

    require __DIR__ . '/auth.php';
});
