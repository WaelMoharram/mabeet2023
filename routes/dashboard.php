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
    Route::get('profile', [\App\Http\Controllers\Dashboard\HomeController::class, 'profile'])->name('profile');

    Route::put('home/update/{id}', [\App\Http\Controllers\Dashboard\HomeController::class, 'عحيشفث'])->name('home.update');

    Route::get('home/edit', [\App\Http\Controllers\Dashboard\HomeController::class, 'edit'])->name('home.edit');

    Route::get('switch-theme', [\App\Http\Controllers\Dashboard\UserController::class, 'switchTheme'])->name('switch-admin-theme');

    Route::resource('users', \App\Http\Controllers\Dashboard\UserController::class);

    Route::resource('admins', \App\Http\Controllers\Dashboard\AdminController::class);

    Route::resource('roles', \App\Http\Controllers\Dashboard\RoleController::class);
    Route::resource('countries', \App\Http\Controllers\Dashboard\CountryController::class);


    Route::resource('seasons', \App\Http\Controllers\Dashboard\SeasonController::class);
    Route::resource('unit-types', \App\Http\Controllers\Dashboard\UnitTypeController::class);
    Route::resource('facilities', \App\Http\Controllers\Dashboard\FacilityController::class);
    Route::resource('services', \App\Http\Controllers\Dashboard\ServiceController::class);
    Route::resource('budgets', \App\Http\Controllers\Dashboard\BudgetController::class);

    Route::resource('units', \App\Http\Controllers\Dashboard\UnitController::class);
    Route::resource('orders', \App\Http\Controllers\Dashboard\OrderController::class);
    Route::post('/orders/accept/{id}', [\App\Http\Controllers\Dashboard\OrderController::class, 'accept'])->name('orders.accept');



    Route::get('users.suspend',[\App\Http\Controllers\Dashboard\UserController::class, 'suspend'])->name('users.suspend');

    Route::resource('pages', \App\Http\Controllers\Dashboard\PageController::class);

    Route::resource('system-options', \App\Http\Controllers\Dashboard\OptionController::class)->only([
        'index', 'edit','update'
    ]);

});
