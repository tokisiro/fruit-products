<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\product_season;
use App\Models\season;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function register(){
        return view('register');
    }

    public function products(){
        $product = Product::all();
        return view('product', ['product' => $product]);
    }
}
