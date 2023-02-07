<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Check Weight',
                // 'slug' => $this->createSlug('Check Weight'),

            ],
            [
                'name' => 'Stick Trier',
                // 'slug' => $this->createSlug('Stick Trier'),

            ],
            [
                'name' => 'Seed Divider',
                // 'slug' => $this->createSlug('Seed Divider')
            ],
            [
                'name' => 'Conductivity Meter',
                // 'slug' => $this->createSlug('Conductivity Meter')
            ],
            [
                'name' => 'pH meter',
                // 'slug' => $this->createSlug('pH meter')
            ],
            [
                'name' => 'Thermometer',
                // 'slug' => $this->createSlug('Thermometer')
            ],
            [
                'name' => 'Microscope',
                // 'slug' => $this->createSlug('Microscope')
            ],
            [
                'name' => 'Digital balance',
                // 'slug' => $this->createSlug('Digital balance')
            ],
            [
                'name' => 'Grinding Mills',
                // 'slug' => $this->createSlug('Grinding Mills')
            ],
            [
                'name' => 'Sieves',
                // 'slug' => $this->createSlug('Sieves')
            ],
            [
                'name' => 'Sieves Shaker',
                // 'slug' => $this->createSlug('Sieves Shaker')
            ],
            [
                'name' => 'Desicator',
                // 'slug' => $this->createSlug('Desicator')
            ],
            [
                'name' => 'Mositure Oven',
                // 'slug' => $this->createSlug('Mositure Oven')
            ],
            [
                'name' => 'Thermocouple',
                // 'slug' => $this->createSlug('Thermocouple')
            ],
            [
                'name' => 'Analytical Balance',
                // 'slug' => $this->createSlug('Analytical Balance')
            ],
            [
                'name' => 'Air Destilator',
                // 'slug' => $this->createSlug('Air Destilator')
            ],
            [
                'name' => 'Electric Germinator',
                // 'slug' => $this->createSlug('Electric Germinator')
            ],
            [
                'name' => 'Thermohygrometer',
                // 'slug' => $this->createSlug('Thermohygrometer')
            ],
            [
                'name' => 'Magnifier Lamp',
                // 'slug' => $this->createSlug('Magnifier Lamp')
            ],
            [
                'name' => 'Scoop',
                // 'slug' => $this->createSlug('Scoop')
            ],
            [
                'name' => 'Dehumidifier',
                // 'slug' => $this->createSlug('Dehumidifier')
            ]
        ];
        collect($categories)->each(function ($category) {
            Category::create($category);
        });
    }
}
