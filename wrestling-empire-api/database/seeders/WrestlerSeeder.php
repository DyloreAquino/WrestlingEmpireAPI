<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Wrestler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WrestlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wrestler::factory()
            ->count(20)
            ->create(); 

        Wrestler::all()->each(function ($wrestler) {
            $wrestler->events()->attach(
                Event::inRandomOrder()->take(5)->get()
                    ->mapWithKeys(fn($w) => [$w->id => [
                        'is_winner' => fake()->boolean(50),
                        'finish_type' => fake()->randomElement(['UNFINISHED', 'PIN', 'SUBMISSION', 'DISQUALIFICATION', 'COUNTOUT', 'TIMEOUT', 'ELIMINATION', 'SPECIAL']),
                    ]])
            );
        });
    }
}
