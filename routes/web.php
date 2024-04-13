<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index']);
Route::post('/', [indexController::class, 'index'])->name('sendmail');

Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');

    Route::controller(PropertiesController::class)->group(function () {
        Route::get('/orders/{id}', 'show');
        Route::get('/properties', 'create')->name('properties');
    });
});

require __DIR__.'/auth.php';
