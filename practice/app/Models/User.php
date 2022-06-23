<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Role;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use  HasApiTokens, HasFactory, Notifiable;
    public function role()
    {
        return $this->hasOne(Role::class, "id", "role_id");
    }
    protected $fillable = [
            'name', 'email', 'password'
    ];
}
