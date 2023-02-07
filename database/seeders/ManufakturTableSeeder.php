<?php

namespace Database\Seeders;

use App\Models\Manufaktur;
use Illuminate\Database\Seeder;

class ManufakturTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufaktus = [
            ['name' => 'Mettler Toledo'],
            ['name' => 'Sunshine'],
            ['name' => 'Seedburo'],
            ['name' => 'Indosaw'],
            ['name' => 'Gamet'],
            ['name' => 'Olympus'],
            ['name' => 'Boerner'],
            ['name' => 'Kern'],
            ['name' => 'Foss'],
            ['name' => 'Duratap'],
            ['name' => 'Neglene'],
            ['name' => 'Perten'],
            ['name' => 'Memmert'],
            ['name' => 'Extech'],
            ['name' => 'GFL, Germany'],
            ['name' => 'Star Quality Samplers'],
            ['name' => 'Ohaus'],
            ['name' => 'Dazor'],
            ['name' => 'Krisbow'],
            ['name' => 'Duran'],
            ['name' => 'Binder'],
            ['name' => 'AND'],
            ['name' => 'Normax'],
            ['name' => 'Steinlite'],
            ['name' => 'Global Gilson'],
            ['name' => 'Humboldt'],
            ['name' => 'Sinbo'],
            ['name' => 'IMD'],
            ['name' => 'Testo'],
            ['name' => 'Vibra'],
        ];
        collect($manufaktus)->each(function ($manufaktur) {
            Manufaktur::create($manufaktur);
        });
    }
}
