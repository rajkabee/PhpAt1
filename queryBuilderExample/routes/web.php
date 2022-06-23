<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/products",[Products::class, "productList"]);
Route::get("/products/{id}", [Products::class,"getProduct"]);
Route::get("/productsCount", [Products::class, "countProducts"]);
Route::view("/addProduct", "productForm");
Route::post("/addProduct", [products::class, "addProduct"]);
Route::get("/category/{id}",[Products::class, "getCategory"]);