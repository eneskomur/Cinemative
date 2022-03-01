<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilmSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['title' => 'Uncharted'],
            ['title' => 'Örümcek-Adam: Eve Dönüş Yok'],
            ['title' => 'Aykut Enişte 2'],
            ['title' => 'Otomatik Portakal']
        ];
        \DB::table('films')->insert($items);
    }
}
