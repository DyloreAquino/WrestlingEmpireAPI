<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Stipulation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory()
            ->count(50)
            ->create();

        Event::all()->each(function ($event) {
            $num_of_stips = fake()->numberBetween(0,3);
            $event->stipulations()->attach(
                Stipulation::inRandomOrder()->take($num_of_stips)->pluck('id')
            );
        });
    }
}
