<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'role_id'=>1
        ]);
        User::create([
            'name'=>'nawadeep adhikari',
            'address'=>'Dshapakhel, lalitpur',
            'email'=>'nawadeep@gmail.com',
            'isActive'=>true,
            'role_id'=>2
        ]);
        User::create([
            'name'=>'Nabin pradhan',
            'address'=>'Dhapakhel, lalitpur',
            'email'=>'nabinPhdn@gmail.com',
            'isActive'=>true,
            'role_id'=>3
        ]);
        
    }
}
