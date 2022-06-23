<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function list(){
        return Product::all();
    }
    function getOne(Product $key){
        return $key;
    }
    function addProduct(Request $req){
        $product = new Product();
        $product->name = $req->name;
        $product->manufacturer=$req->manufacturer;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->isInStock = $req->isInStock;
        $product->isActive = $req->isActive;
        $result = $product->save();
        if($result){
            return ['Result'=>'data has been saved'];
        }
        else{
            {
                return ['Result'=>'0'];
            }
        }

    }

    

    function updateProduct(Request $req){
        
        $product = Product::find($req->id);
        
        $product->name = $req->name;
        $product->manufacturer=$req->manufacturer;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->isInStock = $req->isInStock;
        $product->isActive = $req->isActive;
        
        $result = $product->save();

        if($result){
            return ['Result'=>'data has been updated'];
        }
        else{
            {
                return ['Result'=>'0'];
            }
        }
    }
}
