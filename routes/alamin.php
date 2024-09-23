<?php

use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('contact', [PagesController::class, 'contact'])->name('contact');
Route::post('contact-store', [PagesController::class, 'contact_store'])->name('contact_store');