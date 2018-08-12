<?php

use Illuminate\Database\Seeder;

class UserTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Nepatvirtintas studentas',
        ]);
        DB::table('types')->insert([
            'name' => 'Patvirtintas studentas',
        ]);
        DB::table('types')->insert([
            'name' => 'Dėstytojas',

        ]);

    }
}
