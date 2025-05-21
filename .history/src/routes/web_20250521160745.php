<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/products', [ProductController::class, 'products']);

Route::get('/products/search', [ProductController::class, 'search']);
Route::get('/products/sort', [ProductController::class, 'sort']);
Route::get('/products/register', [ProductController::class, 'add']);
//商品追加機能
Route::post('/products/register', [ProductController::class, 'create']);

//商品詳細ページ表示
Route::get('/products/{productId}', [ProductController::class, 'change'])->name('products.change');
//商品更新機能
Route::patch('/products/{productId}/update',[ProductController::class,'update']);
//商品削除機能
Route::delete('/products/{productId}/delete',[ProductController::class,'remove']);


