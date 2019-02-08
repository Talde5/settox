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
        //
        DB::table('users')->delete();

        DB::table('users')->insert(
        ['email' => 'admin@admin.com', 'password' => Hash::make('admin'), 'rol' => 0 , 'egoera'=>1,'departamentua'=> 'admin']
        );
    }
}
