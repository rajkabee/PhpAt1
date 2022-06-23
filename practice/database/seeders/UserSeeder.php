<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
            'name'=>'prajwol subedi',
            'address'=>'Khumaltar, lalitpur',
            'email'=>'starpraz@gmail.com',
            'isActive'=>true,
            'role_id'=>1, 
            'password'=>Hash::make('password'),
        ]);
        User::create([
            'name'=>'nawadeep adhikari',
            'address'=>'Dshapakhel, lalitpur',
            'email'=>'nawadeep@gmail.com',
            'isActive'=>true,
            'role_id'=>2,
            'password'=>Hash::make('password'),
        ]);
        User::create([
            'name'=>'Nabin pradhan',
            'address'=>'Dhapakhel, lalitpur',
            'email'=>'nabinPhdn@gmail.com',
            'isActive'=>true,
            'role_id'=>3,
            'password'=>Hash::make('password'),
        ]);
    }

  
}
