<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryProduct::create([
            'product_id'=>1,
            'category_id'=>1
        ]);
        CategoryProduct::create([
            'product_id'=>1,
            'category_id'=>2
        ]);
        CategoryProduct::create([
            'product_id'=>1,
            'category_id'=>3
        ]);
        CategoryProduct::create([
            'product_id'=>2,
            'category_id'=>1
        ]);
        CategoryProduct::create([
            'product_id'=>2,
            'category_id'=>2
        ]);
        CategoryProduct::create([
            'product_id'=>2,
            'category_id'=>3
        ]);
        CategoryProduct::create([
            'product_id'=>3,
            'category_id'=>1
        ]);
        CategoryProduct::create([
            'product_id'=>3,
            'category_id'=>1
        ]);
    }
}
