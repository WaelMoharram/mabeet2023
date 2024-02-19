<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Provider\OffersController;
use App\Http\Controllers\Provider\UnitsController;
use App\Http\Controllers\ChatController;

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

//Migrations routes
//Route::get('migrate/users', [\App\Http\Controllers\MigrationController::class, 'users'])->name('migrate.users');
//Route::get('migrate/towns', [\App\Http\Controllers\MigrationController::class, 'towns'])->name('migrate.towns');
//Route::get('migrate/homes', [\App\Http\Controllers\MigrationController::class, 'homes'])->name('migrate.homes');
//Route::get('migrate/options', [\App\Http\Controllers\MigrationController::class, 'options'])->name('migrate.options');
//Route::get('migrate/orders', [\App\Http\Controllers\MigrationController::class, 'orders'])->name('migrate.orders');


// Socialite auth

//Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('google-login');
//Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
//
//Route::get('auth/apple', [LoginController::class, 'redirectToApple']);
//Route::get('auth/apple/callback', [LoginController::class, 'handleAppleCallback']);


Route::middleware(['language'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/page/{title}',[\App\Http\Controllers\HomeController::class,'page'])->name('page');

    Route::get('lang-ar', function () {
        session()->put('lang', 'ar');
        return back();
    })->name('lang-ar');

    Route::get('lang-en', function () {
        session()->put('lang', 'en');
        return back();
    })->name('lang-en');


    Route::middleware('auth:web')->group(function () {
        Route::prefix('client')->group(function () {
            Route::get('/orders', [OrderController::class, 'index'])->name('orders');

            Route::get('create_order', [OrderController::class, 'create'])->name('orders.create');
            Route::post('save_order', [OrderController::class, 'store'])->name('orders.store');
        });


        Route::get('/my-profile', [ProfileController::class, 'show'])->name('my-profile');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




//        Route::post('store_order',[OrderController::class, 'store'])->name('orders.store');

        Route::get('/chat', [ChatController::class, 'index'])->name('chat');
        Route::post('/chat-message', [ChatController::class, 'message'])->name('chat.message');

        Route::get('/notifications', [OrderController::class, 'index'])->name('notifications');
        Route::get('/request', [OrderController::class, 'create'])->name('request');
    });

    require __DIR__ . '/auth.php';
});

Route::get('order-details', [OrderController::class, 'show'])->name('orders.show');


// Provider Routes ...
Route::resource('units', UnitsController::class)->middleware('auth');
Route::post('get-facilities-by-unit-type-id',[UnitsController::class,'getFacilitiesByUnitTypeId'])->name('get.facilities.by.type');
Route::post('destroy-unit-image',[UnitsController::class,'destroyUnitImage'])->name('unit.image.destroy');


// Provider Offers pages
Route::get('provider/offers', [OffersController::class, 'index'])->name('offers');
Route::get('provider/offers-details/{id}', [OffersController::class, 'show'])->name('offers.show');
Route::post('provider/offers/add-offer/{unit_id}/{order_id}', [OffersController::class, 'addOffer'])->name('offers.add');
Route::post('provider/offers/finish-order/{offer_id}', [OffersController::class, 'finishOrderByOfferId'])->name('offers.finish');


