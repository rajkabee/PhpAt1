<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class Products extends Controller
{
    function showProducts(){
        $products = DB::table('products')->get();
        return view("productList", ['products'=>$products]);
    }
    function addProduct(Request $request){
        $product = new Product();
        $product->productName = $request->productName;
        $product->brand = $request->manufacturer;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->isInStock =$request->isInStock=='true'?true:false;
        //echo $product;
        $product->save();
        return redirect("/products");
        
    }

    function deleteProduct($id){
        $product = Product::whereProductid($id)->get();
        $product->where('productId',"=", $id)->each->delete();
        return redirect("/products");
        
    }

    function updateProductForm($id){
        $product = Product::whereProductid($id)->first();
        return view("ProductUpdateForm",['product'=>$product]);
      
    }

    function updateProduct(Request $req){
        $product = Product::find($req->productId);
        $product->productName = $req->productName;
        $product->brand = $req->manufacturer;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->isInStock = $req->isInStock=='true'?true:false;
        $product->save();
        return redirect("/products");
    }
    function averagePrice(){
       return DB::table('products')->max("price");

    }
}
