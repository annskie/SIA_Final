<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ships;

class ShipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ships = [
            [
                'name' => 'Bulk Carrier Ships',
                'model' => 'Cargo Ship Model',
                'types' => 'bulk carriers ',
                'speed' => '12 knots',
                'description' => 'A bulk carrier or bulker is a merchant ship specially designed to transport unpackaged bulk cargo such as grains, coal, ore, steel coils, and cement in its cargo holds. '
            ],
            [
                'name' => 'Passenger Ships',
                'model' => 'Cruise ships Model',
                'types' => 'Cruise ships',
                'speed' => '30 knots 34.5 miles per hour',
                'description' => 'A passenger ship is a merchant ship whose primary function is to carry passengers on the sea. '
            ],
            [
                'name' => 'Ocean ship',
                'model' => 'Ocean Linear & Cruise Ship Model',
                'types' => 'Cargo ship',
                'speed' => '11 knots 20 km/h',
                'description' => 'Ocean ships have a design and function similar to a cruise ship. Its  just that this ship operates across the ocean and has a different port of departure and stopping port. One of the example of ocean ship is Titanic.'
            ],

            ];
            foreach($ships as $ship){
                Ships::create($ship);
            }
    }
}

