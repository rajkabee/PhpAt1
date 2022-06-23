<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{   
    
    
    public function index(){
        $title = "User Manager";
        return view('UserManager', ['title'=>$title]);
    }

    public function addUser(Request $request){
        
        //echo 'user added: '.$request->input('name').' '.$request->input('age');
        //return ['name'=>$request->input('name'), 'age'=>$request->input('age')];
        return view('UserManager', ['name' => $request->input('name'), 'age'=>$request->input('age')]);

    }
}
