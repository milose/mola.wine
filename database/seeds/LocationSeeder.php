<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run()
    {
        Location::create([
            'type' => 'restaurant',
            'name' => 'Miloš',
            'address' => 'Baku 52',
            'city' => 'Podgorica',
            'lat' => '42.444480',
            'lng' => '19.236680',
        ]);

        Location::create([
            'type' => 'restaurant',
            'name' => 'MeGusta',
            'address' => 'Serdara Jola Piletića',
            'city' => 'Podgorica',
            'lat' => '42.4499973',
            'lng' => '19.2594355',
        ]);

        Location::create([
            'type' => 'restaurant',
            'name' => 'Kensington',
            'address' => 'Baky 24',
            'city' => 'Podgorica',
            'lat' => '42.4448784',
            'lng' => '19.2372352',
        ]);

        Location::create([
            'type' => 'restaurant',
            'name' => 'PerSempre',
            'address' => 'Vojvode Maša Đurovića 2/10',
            'city' => 'Podgorica',
            'lat' => '42.4399473',
            'lng' => '19.234373',
        ]);

        Location::create([
            'type' => 'restaurant',
            'name' => 'Garden',
            'address' => 'Bulevar Mihaila Lalića 9',
            'city' => 'Podgorica',
            'lat' => '42.4437537',
            'lng' => '19.2450052',
        ]);

        Location::create([
            'type' => 'restaurant',
            'name' => 'Street Bar',
            'address' => 'Bulevar Svetog Petra Cetinjskog 192',
            'city' => 'Podgorica',
            'lat' => '42.444109',
            'lng' => '19.2471188',
        ]);

        Location::create([
            'type' => 'restaurant',
            'name' => 'Culture Club Štrudla',
            'address' => 'Bokeška 16',
            'city' => 'Podgorica',
            'lat' => '42.4423256',
            'lng' => '19.2610455',
        ]);
    }
}
