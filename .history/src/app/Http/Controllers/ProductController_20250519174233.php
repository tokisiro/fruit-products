<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Season;
use App\Models\Season;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //商品一覧ページの表示
    public function products(){
        $products = Product::all();
        $pages = Product::Paginate(6);

        return view('product', compact('products', 'pages',));
    }

    //検索機能
    public function search(Request $request){
        $query = Product::query();
    if ($request->filled('name')) {
        $query->where('name', 'like', '%' . $request->input('name') . '%');
    }
    $pages = Product::Paginate(6);

    $products = $query->paginate(6);
    return view('search', compact('products','pages'));
    }

    //並び替え機能
    public function Sort(Request $request){
        
        $query = Product::query();
        $sort = $request->input('sort');

        if ($sort) {
            if ($sort == 'price_asc') {
                $query->orderBy('price', 'asc');
            } elseif ($sort == 'price_desc') {
                $query->orderBy('price', 'desc');
            }
        } else {
            // デフォルトの並び順
            $query->orderBy('created_at', 'desc');
        }
        $products = Product::Paginate(6);

        return view('product', compact('products','sort'));
    }

    //商品詳細画面表示
    public function change($productId){
        $change = Product::find($productId);
        $products = Product_Season::where('product_id', $productId)->pluck('season_id')->toArray();
        return view('index', compact('change','products'));
    }
    //更新機能
    public function update(ProductRequest $request,$productId)
    {
        $data = $request->all();
        unset($data['_token']);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/products');
            $data['image'] = Storage::url($path); // 保存先パスをセット
        } else {
            unset($data['image']); // 画像がない場合は更新しない
        }

        Product::find($productId)->update($data);

        return redirect('/products');
    }
    //削除機能
    public function remove($productId)
    {
        Product::find($productId)->delete();
        return redirect('/products');
    }
    //商品追加ページ表示
    public function add(){
        return view('/register');
}
    //追加機能
    public function create(ProductRequest $request){
        $form = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path = $request->file('image')->store('public/products');
            $form['image'] = Storage::url($path);
        } else {
            $form['image'] = '';
        }
        product::create($form);
        return redirect('/products');
    }
}
