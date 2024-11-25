<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/about', 'landing.about')->name('landing.about');
Route::view('/services', 'landing.services')->name('landing.services');
Route::view('/blog', 'landing.blog')->name('landing.blog');
Route::view('/contact-us', 'landing.contact')->name('landing.contact');
