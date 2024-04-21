<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index'])->name('home');
Route::get('/{name_property}/{id}', [indexController::class, 'show']);
Route::post('/', [indexController::class, 'index'])->name('sendmail');

Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');

    Route::controller(PropertiesController::class)->group(function () {
        Route::get('/new/property', 'create')->name('new.property');
        Route::get('/properties', 'show')->name('properties');
    });
});

require __DIR__.'/auth.php';
