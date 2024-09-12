<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('pages.shop.index', compact('products'));
    }

    public function wishlist(){
        //
    }

    public function cart(){
        //
    }
}
