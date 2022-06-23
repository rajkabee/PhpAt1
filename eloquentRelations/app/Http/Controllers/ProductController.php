<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Product $key){
        return $key->categories;
    }

    public function getAll(){
        return Product::all();
    }

    function getOne(Product $key){
        return $key;
    }
    function add(Request $req){
        $product = new Product();
        $product->name = $req->name;
        $product->manufacturer = $req->manufacturer;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->isInStock=$req->isInStock;
        $product->isActive=$req->isActive;
        $result = $product->save();
        if($result){
            return ["output"=>"product added to the database"];
        }
        else{
            return ["output"=>"product couldn't be added"];
        }
    }
    function update(Request $req){
        $product = Product::find($req->id);
        $product->name = $req->name;
        $product->manufacturer = $req->manufacturer;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->isInStock = $req->isInStock;
        $product->isActive = $req->isActive;
        $result = $product->save();
        if($result)
            return "Product Updated...";
        else
            return "Product Update Failed!";
    }

    function delete(Product $key){
       
        $result = $key->delete();
        if($result){
            return "product have been deleted...";
        }
        else{
            return "The product could'nt be deleted!";
        }
        
    }
    function deleteProduct(Request $req){
        $product = Product::find($req->id);
        $result = $product->delete();
        if($result){
            return "product have been deleted...";
        }
        else{
            return "The product could'nt be deleted!";
        }
        
    }
    // function search($key){
    //     return Product ::where('name',$key)->get();
    // }
    function search($key){
        return Product ::where('name','like','%'.$key.'%')
                        ->orwhere('description','like','%'.$key.'%')
                        ->get();
    }

    function valAdd(Request $req){
        $rules = array(
                    'name'=>'required|min:3|max:15'
                    );
        $validator = Validator::make($req->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors());
        }else{
            $product = new Product();
            $product->name = $req->name;
            $product->manufacturer = $req->manufacturer;
            $product->description = $req->description;
            $product->price = $req->price;
            $product->isInStock=$req->isInStock;
            $product->isActive=$req->isActive;
            $result = $product->save();
            if($result){
                return ["output"=>"product added to the database"];
            }
            else{
                return ["output"=>"product couldn't be added"];
            }
        }
    }
}