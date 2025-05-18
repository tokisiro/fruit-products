<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Season;
use App\Models\Season;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

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
        $products = Product_Season::find($productId->id);
        return view('index', compact('change','products'));
    }
    //更新機能 requestに値がないため未実装
    public function update(ProductRequest $request,Product $product)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/products');
            $product->image = Storage::url($path);

            $product->name = $data['name'];
            $product->price = $data['price'];
            $product->description = $data['description'];

                

            if (isset($data['season_id'])) {
                $product->seasons()->sync($data['season_id']);
            }

        return redirect('/products');
    }
}
}