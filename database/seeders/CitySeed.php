<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'title' => 'ADANA', 'plate' => '1'],
            ['id' => 2, 'title' => 'ADIYAMAN', 'plate' => '2'],
            ['id' => 3, 'title' => 'AFYONKARAHİSAR', 'plate' => '3'],
            ['id' => 4, 'title' => 'AĞRI', 'plate' => '4'],
            ['id' => 5, 'title' => 'AKSARAY', 'plate' => '68'],
            ['id' => 6, 'title' => 'AMASYA', 'plate' => '5'],
            ['id' => 7, 'title' => 'ANKARA', 'plate' => '6'],
            ['id' => 8, 'title' => 'ANTALYA', 'plate' => '7'],
            ['id' => 9, 'title' => 'ARDAHAN', 'plate' => '75'],
            ['id' => 10, 'title' => 'ARTVİN', 'plate' =>  '8'],
            ['id' => 11, 'title' => 'AYDIN', 'plate' =>  '9'],
            ['id' => 12, 'title' => 'BALIKESİR', 'plate' =>  '10'],
            ['id' => 13, 'title' => 'BARTIN', 'plate' =>  '74'],
            ['id' => 14, 'title' => 'BATMAN', 'plate' =>  '72'],
            ['id' => 15, 'title' => 'BAYBURT', 'plate' =>  '69'],
            ['id' => 16, 'title' => 'BİLECİK', 'plate' =>  '11'],
            ['id' => 17, 'title' => 'BİNGÖL', 'plate' =>  '12'],
            ['id' => 18, 'title' => 'BİTLİS', 'plate' =>  '13'],
            ['id' => 19, 'title' => 'BOLU', 'plate' =>  '14'],
            ['id' => 20, 'title' => 'BURDUR', 'plate' =>  '15'],
            ['id' => 21, 'title' => 'BURSA', 'plate' =>  '16'],
            ['id' => 22, 'title' => 'ÇANAKKALE', 'plate' =>  '17'],
            ['id' => 23, 'title' => 'ÇANKIRI', 'plate' =>  '18'],
            ['id' => 24, 'title' => 'ÇORUM', 'plate' =>  '19'],
            ['id' => 25, 'title' => 'DENİZLİ', 'plate' =>  '20'],
            ['id' => 26, 'title' => 'DİYARBAKIR', 'plate' =>  '21'],
            ['id' => 27, 'title' => 'DÜZCE', 'plate' =>  '81'],
            ['id' => 28, 'title' => 'EDİRNE', 'plate' =>  '22'],
            ['id' => 29, 'title' => 'ELAZIĞ', 'plate' =>  '23'],
            ['id' => 30, 'title' => 'ERZİNCAN', 'plate' =>  '24'],
            ['id' => 31, 'title' => 'ERZURUM', 'plate' =>  '25'],
            ['id' => 32, 'title' => 'ESKİŞEHİR', 'plate' =>  '26'],
            ['id' => 33, 'title' => 'GAZİANTEP', 'plate' =>  '27'],
            ['id' => 34, 'title' => 'GİRESUN', 'plate' =>  '28'],
            ['id' => 35, 'title' => 'GÜMÜŞHANE', 'plate' =>  '29'],
            ['id' => 36, 'title' => 'HAKKARİ', 'plate' =>  '30'],
            ['id' => 37, 'title' => 'HATAY', 'plate' =>  '31'],
            ['id' => 38, 'title' => 'IĞDIR', 'plate' =>  '76'],
            ['id' => 39, 'title' => 'ISPARTA', 'plate' =>  '32'],
            ['id' => 40, 'title' => 'İSTANBUL', 'plate' =>  '34'],
            ['id' => 41, 'title' => 'İZMİR', 'plate' =>  '35'],
            ['id' => 42, 'title' => 'KAHRAMANMARAŞ', 'plate' =>  '46'],
            ['id' => 43, 'title' => 'KARABÜK', 'plate' =>  '78'],
            ['id' => 44, 'title' => 'KARAMAN', 'plate' =>  '70'],
            ['id' => 45, 'title' => 'KARS', 'plate' =>  '36'],
            ['id' => 46, 'title' => 'KASTAMONU', 'plate' =>  '37'],
            ['id' => 47, 'title' => 'KAYSERİ', 'plate' =>  '38'],
            ['id' => 48, 'title' => 'KIRIKKALE', 'plate' =>  '71'],
            ['id' => 49, 'title' => 'KIRKLARELİ', 'plate' =>  '39'],
            ['id' => 50, 'title' => 'KIRŞEHİR', 'plate' =>  '40'],
            ['id' => 51, 'title' => 'KİLİS', 'plate' =>  '79'],
            ['id' => 52, 'title' => 'KOCAELİ', 'plate' =>  '41'],
            ['id' => 53, 'title' => 'KONYA', 'plate' =>  '42'],
            ['id' => 54, 'title' => 'KÜTAHYA', 'plate' =>  '43'],
            ['id' => 55, 'title' => 'MALATYA', 'plate' =>  '44'],
            ['id' => 56, 'title' => 'MANİSA', 'plate' =>  '45'],
            ['id' => 57, 'title' => 'MARDİN', 'plate' =>  '47'],
            ['id' => 58, 'title' => 'MERSİN', 'plate' =>  '33'],
            ['id' => 59, 'title' => 'MUĞLA', 'plate' =>  '48'],
            ['id' => 60, 'title' => 'MUŞ', 'plate' =>  '49'],
            ['id' => 61, 'title' => 'NEVŞEHİR', 'plate' =>  '50'],
            ['id' => 62, 'title' => 'NİĞDE', 'plate' =>  '51'],
            ['id' => 63, 'title' => 'ORDU', 'plate' =>  '52'],
            ['id' => 64, 'title' => 'OSMANİYE', 'plate' =>  '80'],
            ['id' => 65, 'title' => 'RİZE', 'plate' =>  '53'],
            ['id' => 66, 'title' => 'SAKARYA', 'plate' =>  '54'],
            ['id' => 67, 'title' => 'SAMSUN', 'plate' =>  '55'],
            ['id' => 68, 'title' => 'SİİRT', 'plate' =>  '56'],
            ['id' => 69, 'title' => 'SİNOP', 'plate' =>  '57'],
            ['id' => 70, 'title' => 'SİVAS', 'plate' =>  '58'],
            ['id' => 71, 'title' => 'ŞANLIURFA', 'plate' =>  '63'],
            ['id' => 72, 'title' => 'ŞIRNAK', 'plate' =>  '73'],
            ['id' => 73, 'title' => 'TEKİRDAĞ', 'plate' =>  '59'],
            ['id' => 74, 'title' => 'TOKAT', 'plate' =>  '60'],
            ['id' => 75, 'title' => 'TRABZON', 'plate' =>  '61'],
            ['id' => 76, 'title' => 'TUNCELİ', 'plate' =>  '62'],
            ['id' => 77, 'title' => 'UŞAK', 'plate' =>  '64'],
            ['id' => 78, 'title' => 'VAN', 'plate' =>  '65'],
            ['id' => 79, 'title' => 'YALOVA', 'plate' =>  '77'],
            ['id' => 80, 'title' => 'YOZGAT', 'plate' =>  '66'],
            ['id' => 81, 'title' => 'ZONGULDAK', 'plate' =>  '67']
        ];
        \DB::table('cities')->insert($items);
    }
}
