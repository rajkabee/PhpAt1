<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"user",
            "email"=>"user@email.com",
            "password"=>Hash::make("userpass")
        ]);
        User::create([
            "name"=>"manager",
            "email"=>"manager@email.com",
            "password"=>Hash::make("managerpass")
        ]);
        User::create([
            "name"=>"admin",
            "email"=>"admin@email.com",
            "password"=>Hash::make("adminpass")
        ]);
    }
}
