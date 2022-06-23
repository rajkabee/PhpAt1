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
            'name' => 'smart Watch',
            'description' =>"High quality smatartwatch"
        ]);
        Category::create([
            'name' => 'Electronics',
            'description' =>"High quality Electronic Products"
        ]);
        Category::create([
            'name' => 'Mens Fashion',
            'description' =>"Mens fashion products"
        ]);
    }
}
