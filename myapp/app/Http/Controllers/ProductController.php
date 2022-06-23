<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id){
        echo 'product Controller';
        echo "Product id : ".$id;
        return view("ProductManager");
    }

    public function addProduct(Request $request){
        $product = ['name'=>$request->input('name'), 
                    'price'=>$request->input('price')
                    ];
        //return $product;
        return view('ProductManager', ['name'=>$request->input('name'), 
                                        'price'=>$request->input('price')
                                        ]);
    }
}
