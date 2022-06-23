<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title'=>'Comment',
            'description'=>"this is a beautiful picture",
            'user_id'=>1
        ]);
        Post::create([
            'title'=>'Message',
            'description'=>"You are supposed to be on that meeting this evening",
            'user_id'=>1
        ]);
        Post::create([
            'title'=>'Requesition',
            'description'=>"i need a new cabin.",
            'user_id'=>1
        ]);
    }
}
