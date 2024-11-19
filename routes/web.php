<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'Welcome')->name('Welcome');
Route::view('/photos', 'photos')->name('photos');
Route::view('/contact', 'contact')->name('contact');

;
