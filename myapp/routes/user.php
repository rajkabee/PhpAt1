<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get("/user", [UserController::class, 'index']);

Route::get("/user/addUser", [UserController::class, "addUser"]);