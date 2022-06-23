<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WriteSql extends Controller
{
    public function getUsers(){
        return DB::select("Select * from users where id=3");
    }
}
