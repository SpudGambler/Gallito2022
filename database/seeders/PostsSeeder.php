<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'content' => "Ucrania vs Rusia",
            'user_id' => 1,
            //'likes' => 5000,
        ]);

        DB::table('posts')->insert([
            'content' => "Venezuela nos invade",
            'user_id' => 1,
            //'likes' => 2500,
        ]);

        DB::table('posts')->insert([
            'content' => "Ganamos la guerra",
            'user_id' => 1,
            //'likes' => 1250,
        ]);

        DB::table('posts')->insert([
            'content' => "Covid 2",
            'user_id' => 2,
            //'likes' => 625,
        ]);

        DB::table('posts')->insert([
            'content' => "Elon Musk llega a la luna",
            'user_id' => 2,
            //'likes' => 500,
        ]);
    }
}
