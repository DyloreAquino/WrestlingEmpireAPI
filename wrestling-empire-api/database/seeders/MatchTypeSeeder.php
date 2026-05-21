<?php

namespace Database\Seeders;

use App\Models\MatchType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatchTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MatchType::insert([
            ['name' => 'Singles'],
            ['name' => 'Tag Team'],
            ['name' => 'Team'],
            ['name' => 'Triple Threat'],
            ['name' => 'Fatal Four-way'],
            ['name' => 'Handicap'],
            ['name' => 'Gauntlet'],
            ['name' => 'Battle Royale'],
            ['name' => 'Countdown Elimination'],
        ]);
    }
}
