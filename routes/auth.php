<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/login', function () {
    return view('auth.login');
})->name('password.request');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');