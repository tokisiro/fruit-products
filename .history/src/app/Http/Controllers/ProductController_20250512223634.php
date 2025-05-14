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
    //商品一覧ページの表示
    public function products(){
        $products = Product::all();
        $pages = Product::Paginate(6);
        return view('product', compact('products', 'pages'));
    }
    //商品詳細画面表示
    public function change(Product $productId){
        $change = Product::find($productId->id);
        $products = product_season::find($productId->id);
        return view('index', compact('change','products'));
    }
    //更新機能
    public function update(Request $requ)
}
