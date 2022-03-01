<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CinemaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['title' => 'Lale Sineması', 'city_id' => '78'],
            ['title' => 'Cinemaximum Antares', 'city_id' => '7'],
            ['title' => 'Ankamall IMAX', 'city_id' => '7']
        ];
        \DB::table('cinemas')->insert($items);
    }
}
