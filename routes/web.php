<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/login', function () {})->name('login');
Route::get('/register', function () {})->name('register');
Route::get('/shop.wishlist', function () {})->name('shop.wishlist');
Route::get('/shop.cart', function () {})->name('shop.cart');
Route::get('/shop', function () {})->name('shop');