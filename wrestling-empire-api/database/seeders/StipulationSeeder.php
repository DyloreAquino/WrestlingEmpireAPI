<?php

namespace Database\Seeders;

use App\Models\Stipulation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StipulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stipulation::insert([
            ['name' => 'Hardcore'],
            ['name' => 'Open Challenge'],
            ['name' => 'Confrontation'],
            ['name' => 'Best of Three'],
            ['name' => 'Ironman'],
            ['name' => 'Last Laugh'],
            ['name' => 'Submission'],
            ['name' => 'Last Man Standing'],
            ['name' => 'Street Fight'],
            ['name' => 'First Blood'],
            ['name' => 'Sumo Contest'],
            ['name' => 'Shoot Fight'],
            ['name' => 'Tag Elimination'],
            ['name' => 'War'],
            ['name' => 'Elimination'],
            ['name' => 'Escape to Victory'],
            ['name' => 'Furniture Smash'],
            ['name' => 'Ladder'],
            ['name' => 'Hell in a Cell'],
            ['name' => 'Training'],
        ]);
    }
}
