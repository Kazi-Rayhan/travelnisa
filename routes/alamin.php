<?php

use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('/hotels', [PagesController::class, 'hotels'])->name('hotels');
Route::get('/abouts', [PagesController::class, 'about'])->name('abouts');