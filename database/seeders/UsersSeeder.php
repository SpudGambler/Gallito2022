<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('users')->insert([
            'name' => "Jaime Parra",
            'email' => "jaimea.parral@autonoma.edu.co",
            'password' => Hash::make("hola1234"),
        ]);

        DB::table('users')->insert([
            'name' => "Pepito Perez",
            'email' => "pepitog.perezh@autonoma.edu.co",
            'password' => Hash::make("bola1234"),
        ]);

        DB::table('users')->insert([
            'name' => "Alberto Garcia",
            'email' => "albertoj.garcial@autonoma.edu.co",
            'password' => Hash::make("sola1234"),
        ]); */

        $u = new User();
        $u->name =  "Jaime Parra";
        $u->email =  "jaimea.parral@autonoma.edu.co";
        $u->password =  Hash::make("hola1234");
        $u->save();

        $u = new User();
        $u->name =  "Pepito Perez";
        $u->email =  "pepitog.perezh@autonoma.edu.co";
        $u->password =  Hash::make("bola1234");
        $u->save();

        $u = new User();
        $u->name =  "Alberto Garcia";
        $u->email =  "albertoj.garcial@autonoma.edu.co";
        $u->password =  Hash::make("sola1234");
        $u->save();
    }
}
