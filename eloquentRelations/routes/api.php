<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('products',[ProductController::class, 'getAll']);
Route::get('products/{key}',[ProductController::class, 'getOne']);
Route::post('products',[ProductController::class,'add']);
Route::put('products', [productController::class, 'update']);
Route::delete('products/{key}', [productController::class, 'delete']);
Route::delete('products', [productController::class, 'deleteProduct']);
Route::get('products/search/{key}', [ProductController::class, 'search']);

Route::post('valAdd',[ProductController::class, 'valAdd']);