<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['name' => 'Operative'],
            ['name' => 'Inoperative'],
            ['name' => 'Discarded'],
        ];
        collect($statuses)->each(function ($status) {
            Status::create($status);
        });
    }
}
