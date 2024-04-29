<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StyleController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home');


Route::resource('/abouts', AboutController::class);
Route::resource('/contacts', ContactController::class);
Route::resource('/stylies', StyleController::class);