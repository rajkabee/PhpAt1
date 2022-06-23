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
            'name'=>'Tata Nixon',
            'manufacturer'=>"TATA",
            'description'=> '1200cc diesel engine, 4 seater',
            'price'=>4200000.00,
            'isInStock'=>true,
            
        ]);
        Product::create([
            'name'=>'BMW G6',
            'manufacturer'=>"BMW",
            'description'=> '1400cc petrol engine, 4 seater',
            'price'=>8900000.00,
            'isInStock'=>true,
            
            
        ]);
        Product::create([
            'name'=>'Nissan Patrol dxi',
            'manufacturer'=>"Nissan",
            'description'=> '3400cc diesel engine, 4 seater truck',
            'price'=>7500000.00,
            'isInStock'=>true,
            
        ]);
    }
}
