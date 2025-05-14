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
    public function change(Product $productId){
        $change = Product::find($productId->id);
        $products = Product::with('product_season')->get();
        dd()
        return view('index', compact('change','products'));
    }
}
