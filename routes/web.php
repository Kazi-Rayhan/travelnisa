<?php

use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('', [PagesController::class, 'homePage'])->name('home_page');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



