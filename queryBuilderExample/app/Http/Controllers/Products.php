<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Products extends Controller
{
    function productList(){
        $products = DB::table('products')->get();
        return view("productList", ['products'=>$products]);
    }
    function getProduct($id){
        return DB::table('products')
                    ->where("productId", $id)
                    ->get();
    }
    function countProducts(){
        return DB::table("products")->count();
    }
    function addProduct(Request $request){
        DB::table("products")
        ->insert(
            [
                'productName'=>$request->productName,
                'brand'=>$request->manufacturer,
                'description'=>$request->description,
                'price'=>$request->price,
                'isInStock'=>$request->isInStock=='true'?true:false

            ]
            );
        return redirect("/products");
        
    }
    function updateProduct(Request $request){
        DB::table("products")
        ->where("productId", $request->productId)
        ->update(
            [
                'productName'=>$request->productName,
                'brand'=>$request->manufacturer,
                'description'=>$request->description,
                'price'=>$request->price,
                'isInStock'=>$request->isInStock=='true'?true:false

            ]
            );
        return redirect("/products");
        
    }
    function deleteProduct($id){
        DB::table("products")
        ->where("productId", $id)
        ->delete();
        
        return redirect("/products");
        
    }

    function getCategory($id){
        return DB::table("products")
                ->join('categories', 'id', "=",'products.categoryId')
                ->where('products.productId',$id)
                ->get();

    }




}
