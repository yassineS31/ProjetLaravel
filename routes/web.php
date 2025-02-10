<?php


use App\Http\Controllers\ChirpController;
use App\Http\Controllers\LaravelDocController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome');


Route::get('laravelDoc', [LaravelDocController::class, 'index'])

    ->middleware(['auth', 'verified'])

    ->name('laravelDoc'); 

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
