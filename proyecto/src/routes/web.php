<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'landing.index')-> name('index');
 Route::view('/home', 'landing.home')->name('home');
Route::view('/contact', 'landing.contact')->name('contact');
Route::view('/about', 'landing.about')-> name('about');
