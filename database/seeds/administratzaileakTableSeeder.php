<?php

use Illuminate\Database\Seeder;

class administratzaileakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SuperAdministratzailea sortu
        DB::table('administratzaileak')->delete();

        DB::table('administratzaileak')->insert(
    	['email' => 'prueba@prueba.com', 'pasahitza' => '1234', 'mota' => 1, 'departamentua' => 'Administratzailea', 'egoera' => true]
);


    }
}
