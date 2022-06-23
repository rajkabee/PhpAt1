<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriteSql;
use App\Http\Controllers\UserModelController;
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


Route::get("/myPathVariable/{name}/{address}", function($name, $address){
    return "Welcome, ".$name. " From ".$address;
});
// Route::get("/urlEncodedData", function(Request $request){
//     $name = $request->input('name');
//     $address = $request->input('address');
//     return "Welcome, ".$name. " From ".$address;
// });
Route::get("/getFormData",[App\Http\Controllers\FormController::class,"index"]);
Route::view("/form", "form");

Route::post("/getFormData",[App\Http\Controllers\FormController::class,"postIndex"]);

Route::get("/writeSql", [WriteSql::class,"getUsers"]);
Route::get("/users",[UserModelController::class, "getUsers"]);
Route::get("/deleteUser/{id}", [UserModelController::class, "deleteUser"]);

Route::get("/updateUserForm/{id}", [UserModelController::class, "updateUserForm"]);
Route::post("/updateUser", [UserModelController::class, "updateUser"]);


Route::get("/products", [Products::class, "showProducts"]);
Route::view("/addProduct", "productForm");
Route::post("/addProduct",[Products::class, "addProduct"]);
Route::get("/deleteProduct/{id}", [Products::class, "deleteProduct"]);
Route::get("/updateProductForm/{id}", [Products::class, "updateProductForm"]);
Route::post("/updateProduct", [Products::class, "updateProduct"]);
Route::get("/averagePrice", [products::class, "averagePrice"]);
