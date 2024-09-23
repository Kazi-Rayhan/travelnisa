<?php

use App\Http\Controllers\Frontend\HotelController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('', [PagesController::class, 'homePage'])->name('home_page');
    Route::get('single-hotel/{hotel}', [HotelController::class, 'show'])->name('single_hotel');
});

Auth::routes();

Route::prefix('/user')->as('user.')->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('profile', [ProfileController::class, 'profilePage'])->name('profilePage');
    Route::post('profile', [ProfileController::class, 'profilePageSubmit'])->name('profilePageSubmit');
    Route::get('change-password', [ProfileController::class, 'changePassword'])->name('changePassword');
    Route::post('change-password', [ProfileController::class, 'changePasswordSubmit'])->name('changePasswordSubmit');
});
