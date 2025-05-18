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


Route::get('/products/register', [ProductController::class, 'register']);

Route::get('/products', [ProductController::class, 'products']);
Route::get('/products/update', [ProductController::class, 'index']);

Route::get('/products/search', [ProductController::class, 'search']);
Route::get('/products/sort', [ProductController::class, 'sort']);

Route::get('/products/{productId}', [ProductController::class, 'change'])->name('products.change');
Route::patch('/products/{productId}/update',[ProductController::class,'update']);
Route::delete('/products/{productId}/delete',[ProductController::class,'remove']);
Route::get('/register', [ProductController::class, 'add']);
Route::post('/products/register', [ProductController::class, 'create']);

