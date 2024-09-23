<?php

use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('contact', [PagesController::class, 'contact'])->name('contact');