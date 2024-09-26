<?php

use App\Http\Controllers\Frontend\HotelController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('', [PagesController::class, 'homePage'])->name('home_page');
    Route::get('faqs', [PagesController::class, 'faqsPage'])->name('faq_page');
    Route::get('detail/{hotel}', [HotelController::class, 'show'])->name('single_hotel');
    Route::get('contact', [PagesController::class, 'contactPage'])->name('contact_page');
    Route::post('contact-store', [PagesController::class, 'contact_store'])->name('contact_store');
});

Auth::routes();

Route::prefix('/user')->as('user.')->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('profile', [ProfileController::class, 'profilePage'])->name('profilePage');
    Route::post('profile', [ProfileController::class, 'profilePageSubmit'])->name('profilePageSubmit');
    Route::get('change-password', [ProfileController::class, 'changePassword'])->name('changePassword');
    Route::post('change-password', [ProfileController::class, 'changePasswordSubmit'])->name('changePasswordSubmit');
});

include 'alamin.php';
