<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class User extends Model
{
    use HasFactory;
    public function getRole(){
        return $this->hasone(Role::class, 'id', "role_id");
    }
    public function getPosts(){
        return $this->hasMany(Post::class);
    }
    
}
