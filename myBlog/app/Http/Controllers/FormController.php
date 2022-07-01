<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request){
        echo $request->input('productName');
    }


    public function postIndex(Request $request){
        echo $request->input('productName');
        return view('form');
    }
    public function fileUpload(Request $req){
        $result = $req->file('file')->store('public/images');
        return ['result'=>'uploaded'];
    }

}
