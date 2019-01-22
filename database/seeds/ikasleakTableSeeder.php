<?php

use Illuminate\Database\Seeder;

class ikasleakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ikasleak')->delete();

        DB::table('ikasleak')->insert(
    	['email' => 'ikaslea@ikaslea.com', 'pasahitza' => '1234', 'egoera' => true]
		);
    }
}
