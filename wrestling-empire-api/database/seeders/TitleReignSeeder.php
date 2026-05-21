<?php

namespace Database\Seeders;

use App\Models\TitleReign;
use App\Models\Wrestler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleReignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TitleReign::factory()
            ->count(10)
            ->create();

        TitleReign::all()->each(function ($reign) {
            $reign->wrestlers()->attach(
                Wrestler::inRandomOrder()->take(2)->pluck('id')
            );
        });
    }
}
