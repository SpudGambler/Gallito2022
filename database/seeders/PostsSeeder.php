<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Post();
        $p->content =  "Ucrania vs Rusia";
        $p->user_id =  1;
        $p->save();

        $p = new Post();
        $p->content =  "Venezuela nos invade";
        $p->user_id =  1;
        $p->save();

        $p = new Post();
        $p->content =  "Ganamos la guerra";
        $p->user_id =  1;
        $p->save();

        $p = new Post();
        $p->content =  "Covid 2";
        $p->user_id =  2;
        $p->save();

        $p = new Post();
        $p->content =  "Elon Musk llega a la luna";
        $p->user_id =  2;
        $p->save();

        

        /* DB::table('posts')->insert([
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
        ]); */
    }
}
