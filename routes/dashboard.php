<?php


use App\Http\Controllers\Auth\AuthenticatedAdminSessionController;
Route::middleware('guest')->group(function () {


    Route::get('dashboard/login', [AuthenticatedAdminSessionController::class, 'create'])
        ->name('dashboard.login');

    Route::post('dashboard/login', [AuthenticatedAdminSessionController::class, 'store']);

});
Route::name('dashboard.')->middleware(['language', 'auth:admins'])->prefix('dashboard')->group(function () {


    Route::post('logout', [AuthenticatedAdminSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('/', function () {
        return redirect(route('dashboard.home'));
    });

    Route::get('lang-ar', function () {
        session()->put('lang', 'ar');
        return back();
    })->name('lang-ar');

    Route::get('lang-en', function () {
        session()->put('lang', 'en');
        return back();
    })->name('lang-en');

    Route::get('home', [\App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('home');

    Route::put('home/update/{id}', [\App\Http\Controllers\Dashboard\HomeController::class, 'عحيشفث'])->name('home.update');

    Route::get('home/edit', [\App\Http\Controllers\Dashboard\HomeController::class, 'ثيهف'])->name('home.edit');

    Route::get('switch-theme', [\App\Http\Controllers\Dashboard\UserController::class, 'switchTheme'])->name('switch-admin-theme');

    Route::resource('users', \App\Http\Controllers\Dashboard\UserController::class);

    Route::get('users.suspend',[\App\Http\Controllers\Dashboard\UserController::class, 'suspend'])->name('users.suspend');

    Route::resource('system-options', \App\Http\Controllers\Dashboard\OptionController::class)->only([
        'index', 'edit','update'
    ]);

});
