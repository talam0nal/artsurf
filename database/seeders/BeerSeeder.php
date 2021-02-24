<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beers')->insert([
            'name' => 'Amstel',
            'description' => '«Amstel» — нидерландская пивоваренная компания. Основана 11 июня 1870 года в Амстердаме',
            'image' => '/storage/image/beer.png',
        ]);

        DB::table('beers')->insert([
            'name' => 'Халзан',
            'description' => 'Линейка свежего ароматного пива на любой вкус с легким сбалансированным вкусом и ярко выраженным хмелевым профилем',
            'image' => '/storage/image/beer.png',
        ]);

        DB::table('beers')->insert([
            'name' => 'Heineken',
            'description' => 'Heineken Lager Beer, or simply Heineken is a pale lager beer with 5% alcohol by volume produced by the Dutch brewing company Heineken',
            'image' => '/storage/image/beer.png',
        ]);

    }
}
