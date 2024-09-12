<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/', function () {
    return view('pages.home.index');
});


Route::controller(ShopController::class)->group(function () {

    Route::get('/shop', 'index')->name('shop');
    Route::get('/shop/wishlist', 'wishlist')->name('shop.wishlist');
    Route::get('/shop/cart', 'cart')->name('shop.cart');

    Route::get('/shop/details/{slug}', function ($slug) {})->name('product.details');
});


require __DIR__ . '/auth.php';
