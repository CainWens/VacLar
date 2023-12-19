<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/cabinet', function () {
    return view('user.cabinet');
})->name('cabinet');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/login', function () {
    return view('signin');
})->name('auth')->middleware('guest');

Route::get('/signup', function () {
    return view('signup');
})->middleware('guest')->name('register');

Route::post('/signup/submit', 'App\Http\Controllers\RegistrationController@reg')->name('register-submit');
Route::post('/signin/submit', 'App\Http\Controllers\LoginController@login')->name('login-submit');

Route::get('/profile', function () {
    return view('user.cabinet');
})->middleware('auth')->name('profile');

Route::get('/logout', 'App\Http\Controllers\LoginController@destroy')->middleware('auth')->name('logout');
