<?php

use App\Http\Controllers\DummyAPI;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//dummyAPI
Route::get("/getData",[DummyAPI::class, "getData"]);


//productApi



Route::post("login",[UserController::class,'login']);
Route::post("users",[UserController::class,'addUser']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::get("products", [ProductController::class,'list']);
    Route::get("products/{key}", [ProductController::class,'getOne']);
    Route::post("products", [ProductController::class,'addProduct']);
    Route::put("products", [ProductController::class,'updateProduct']);
});