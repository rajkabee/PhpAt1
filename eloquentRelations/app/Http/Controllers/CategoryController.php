<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $key){
        return $key;
    }

    public function products(Category $key){
        return $key->products;
    }
}
