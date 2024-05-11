<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index'])->name('home');
Route::get('/obrigado-pelo-contato', [indexController::class, 'thanks'])->name('thanks');
Route::get('imovel/{name_property}/{id}', [indexController::class, 'show']);
Route::post('/', [indexController::class, 'sendMail'])->name('sendmail');

Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');

    Route::controller(PropertiesController::class)->group(function () {
        Route::get('/new-property', 'render')->name('new.property');
        Route::get('/properties', 'show')->name('properties');
        Route::get('/edit/{id}', 'edit')->name('edit.id');
    });
});

require __DIR__.'/auth.php';
