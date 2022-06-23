<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('tokenCheck');
Route::get("/user",[UserController::class, 'index'] );
Route::post("/user/addUser",[UserController::class, 'addUser'] );

Route::post("/product/addProduct",[ProductController::class, 'addProduct']);
Route::get("/product/{id}",[ProductController::class, 'show']);

//for laravel 7 only
//Route::get("/url", "UserController@index");
Route::get("productList", function(){
    return view("productList",['products'=>["Monitor", "Mouse", "Laptop", "SSD", "Keyboard"], 'msg'=>"blade Template test"]);
});

Route::get("/blocked",function(){
    return view( "blockedMessage");
});

// Route::group(['middleware'=>['admin']], function(){
    
    
// });
Route::middleware(['admin'])->group(function () {
    Route::view('/manager', 'manager');
    Route::view('/admin', 'adminpage');
});

Route::view("/form", "form");