<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illumination\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            Role::create([
                'name'=>"user",
                'isActive'=>true
            ]);
            Role::create([
                'name'=>"moderator",
                'isActive'=>true
            ]);
            Role::create([
                'name'=>"admin",
                'isActive'=>true
            ]);
        
    }
}
