<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            ['name' => 'Sample Reception and Administration Area'],
            ['name' => 'Physical & Purity Area'],
            ['name' => 'Sample Preparation Room'],
            ['name' => 'Equipment Cabinet'],
            ['name' => 'Sampling'],
            ['name' => 'Seed Sample Storage Room'],
            ['name' => 'Moisture Determination Area'],
            ['name' => 'Seed Testing Preparation Area'],
            ['name' => 'Germination Analysis Area'],
            ['name' => 'Washing and Media Preparation Area (Wet)'],
        ];
        collect($locations)->each(function ($location) {
            Location::create($location);
        });
    }
}
