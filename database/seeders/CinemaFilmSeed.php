<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CinemaFilmSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['cinema_id' => 1, 'film_id' => '1', 'show_time' => '2022-03-02 09:00'],
            ['cinema_id' => 1, 'film_id' => '2', 'show_time' => '2022-03-02 12:00'],
            ['cinema_id' => 1, 'film_id' => '3', 'show_time' => '2022-03-02 22:00'],
            ['cinema_id' => 2, 'film_id' => '1', 'show_time' => '2022-03-02 09:45'],
            ['cinema_id' => 2, 'film_id' => '2', 'show_time' => '2022-03-02 14:30'],
            ['cinema_id' => 2, 'film_id' => '3', 'show_time' => '2022-03-02 17:50'],
            ['cinema_id' => 2, 'film_id' => '2', 'show_time' => '2022-03-02 20:00'],
            ['cinema_id' => 3, 'film_id' => '1', 'show_time' => '2022-03-02 10:00'],
            ['cinema_id' => 3, 'film_id' => '2', 'show_time' => '2022-03-02 13:00'],
            ['cinema_id' => 3, 'film_id' => '3', 'show_time' => '2022-03-02 19:00'],
            ['cinema_id' => 3, 'film_id' => '1', 'show_time' => '2022-03-02 20:00']
        ];
        \DB::table('cinema_films')->insert($items);
    }
}
