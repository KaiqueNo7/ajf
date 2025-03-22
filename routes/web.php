<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index'])->name('home');
Route::get('/{property:name}', [indexController::class, 'show']);

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'show'])->name('dashboard');
        Route::view('profile', 'profile')->name('profile');

        Route::controller(PropertiesController::class)->group(function () {
            Route::get('/new-property', 'render')->name('new.property');
            Route::get('/properties', 'show')->name('properties');
            Route::get('/edit/{property}', 'edit')->name('edit.id');
            Route::get('/additional-infos/{property}', 'additionalInformation')->name('additional-infos.id');
            Route::get('/photos/{property}', 'photos')->name('photos.id');
        });
    });
});

require __DIR__.'/auth.php';
