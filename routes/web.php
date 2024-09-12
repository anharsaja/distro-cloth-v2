<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
});


Route::get('/shop', function () {
    return view('pages.shop.index');
})->name('shop');
Route::get('/shop/wishlist', function () {
    return view('pages.shop.wishlist');
})->name('shop.wishlist');
Route::get('/shop/cart', function () {
    return view('pages.shop.cart');
})->name('shop.cart');


require __DIR__.'/auth.php';