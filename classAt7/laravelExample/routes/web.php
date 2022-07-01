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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/admin', function(){
//     return view('admin');
// });
Route::view('/', 'welcome');
Route::view('/admin', 'admin');
//Route::get("/products", [App\Http\Controllers\ProductController::class, 'index']);
Route::get("/products/{id}", [ProductController::class, 'getOne']);
Route::get("/products", [ProductController::class, 'index']);
Route::post("/products", [ProductController::class, 'addProduct']);
Route::view('/addProductForm', 'addProductForm');
Route::get("/updateProductForm/{id}", [ProductController::class, 'updateProductform']);
Route::post("/updateProduct", [ProductController::class, "updateProduct"]);
