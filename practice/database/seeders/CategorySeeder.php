<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'car',
            'description'=> 'cars only',
            
        ]);
        Category::create([
            'name'=>'Motorcycle',
            'description'=> 'Motorcycles only',
            
        ]);
        Category::create([
            'name'=>'Electric',
            'description'=> 'Electric Vehicles only',
            
        ]);
    }
}
