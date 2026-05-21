<?php

namespace Database\Factories;

use App\Models\Championship;
use App\Models\TitleReign;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TitleReign>
 */
class TitleReignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $has_ended = $this->faker->boolean(70);
        return [
            'championship_id' => Championship::factory(),
            'year_start' => $this->faker->year(),
            'month_start' => $this->faker->numberBetween(1, 12),
            'week_start' => $this->faker->numberBetween(1, 4),
            'year_end' => $has_ended ? $this->faker->year() : NULL,
            'month_end' => $has_ended ? $this->faker->numberBetween(1, 12) : NULL,
            'week_end' => $has_ended ? $this->faker->numberBetween(1, 4) : NULL,
        ];
    }
}
