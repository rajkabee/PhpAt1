<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'smart watch gear 3',
            'manufacturer'=>"Samsung",
            'description'=>"1.6 inches round amoled touch display",
            'price'=>32000,
            'isInStock'=>true,
            'isActive'=>true
        ]);
        Product::create([
            'name'=>'iWatch',
            'manufacturer'=>"Apple",
            'description'=>"1.6 inches round amoled touch display",
            'price'=>45000,
            'isInStock'=>true,
            'isActive'=>true
        ]);
        Product::create([
            'name'=>'Mi fitness band',
            'manufacturer'=>"redmi",
            'description'=>"1.6 inches oval amoled touch display",
            'price'=>7000,
            'isInStock'=>true,
            'isActive'=>true
        ]);
    }
}
