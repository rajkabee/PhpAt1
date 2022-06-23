<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{   
    function index(){
        echo "hello";
    }


    function login(Request $req){
        $user = User::where('email', $req->email)->first();
        if(!$user||!Hash::check($req->password, $user->password)){
            return response([
                'message' =>['the credentials you provided are not valid!']
            , 404]);
        }
        $token = $user->createToken('my-app-token')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }
}
