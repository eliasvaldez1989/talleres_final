<?php

use Illuminate\Database\Seeder;

class neighborhoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('neighborhoods')->insert([
            ['name' => 'LA PLATA'],
            ['name' => 'BERISSO'],
            ['name' => 'LOS HORNOS'],
            ['name' => 'ENSENADA'],
            ['name' => 'RINGUELET'],
            ['name' => 'GUTIERREZ'],
            ['name' => 'CITY BELL'],
            ['name' => 'GORINA'],
            ['name' => 'VILLA ELISA']

        ]);
    }
}
