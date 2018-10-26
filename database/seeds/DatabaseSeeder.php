<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Jose Andres",
            'email' => 'admin',
            'password' => bcrypt('Paralelepipe2'),
        ]);


        DB::table('instalaciones')->insert([
            'nombre' => "Difusor y Fosa 5",
            'longitud' => '-72.069960',
            'latitud' => "-37.157991",
        ]);
    }
}
