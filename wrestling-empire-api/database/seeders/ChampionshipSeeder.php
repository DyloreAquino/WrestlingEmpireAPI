<?php

namespace Database\Seeders;

use App\Models\Championship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChampionshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Championship::factory()
            ->count(5)
            ->hasTitleReigns(4)
            ->create();

        Championship::factory()
            ->count(5)
            ->hasTitleReigns(8)
            ->create();
    }
}
