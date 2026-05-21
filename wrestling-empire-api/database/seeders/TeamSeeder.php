<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\Wrestler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::factory()
            ->count(10)
            ->create();

        Team::all()->each(function ($team) {
            $num_of_members = fake()->numberBetween(2, 4);
            $team->wrestlers()->attach(
                Wrestler::inRandomOrder()->take($num_of_members)->pluck('id')
            );
        });
    }
}
