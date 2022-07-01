<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller{
    public function getOne($id){
       // return DB::select('SELECT * FROM products WHERE productId='.$id);
       return DB::table('products')
                ->where('productId', $id)
                ->get();
    }
    public function index(){
        $products = DB::table('products')->get();

        return view('products', ['products'=>$products]);
    }

    public function addProduct(Request $req){
        Db::table('products')
            ->insert([
                'productName'=>$req->productName,
                'brand'=>$req->brand,
                'description'=>$req->description,
                'price'=>$req->price,
                'isInStock'=>$req->isInStock==='true'?true:false

            ]);
        return redirect('/products');

    }
    function updateProductform($id){
        $product = DB::table('products')
                    ->where ('productId', $id)
                    ->first();
        //return $product;
        return view('updateProductform')->with('product',$product);
    }

    function updateProduct(Request $req){
        Db::table('products')
            ->where('productId', $req->productId)
            ->update([
                'productName'=>$req->productName,
                'brand'=>$req->brand,
                'description'=>$req->description,
                'price'=>$req->price,
                'isInStock'=>$req->isInStock==='true'?true:false

            ]);
        return redirect('/products');

    }
}
