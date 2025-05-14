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
        $products = Product::all();
        $pages = Product::Paginate(6);
        return view('product', compact('products', 'pages'));
    }
    public function detail(){
        return view('detai');
    }
}
