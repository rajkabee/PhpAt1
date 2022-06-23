<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserModelController extends Controller
{
    public function getUsers(){
       // $users =  User::all();
       $users = User::paginate(2);
        return view("usersList", ['users'=>$users]);
    }
    function deleteUser($id){
        $user  = User::find($id);
        //echo $user;
        $user->delete();
        return redirect ("/users");
    }
    function updateUserForm($id){
        $user = User::find($id);
        return view("updateUser", ["user"=>$user]);
    }

    function updateUser(Request $request){
        $user = new User();
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();
        //echo $user;
        return redirect("/users");

    }
}
