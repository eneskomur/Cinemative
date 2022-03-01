<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CinemaTicketSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['user_id' => 1, 'cinema_film_id' => 4, 'seat_number' => 23]
        ];
        \DB::table('cinema_tickets')->insert($items);
    }
}
