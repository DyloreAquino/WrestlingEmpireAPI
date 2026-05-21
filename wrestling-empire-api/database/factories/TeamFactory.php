<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $has_disbanded = $this->faker->boolean(20);
        return [
            'name' => $this->faker->name(),
            'year_start' => $this->faker->year(),
            'month_start' => $this->faker->numberBetween(1, 12),
            'week_start' => $this->faker->numberBetween(1, 4),
            'year_end' => $has_disbanded ? $this->faker->year() : NULL,
            'month_end' => $has_disbanded ? $this->faker->numberBetween(1, 12) : NULL,
            'week_end' => $has_disbanded ? $this->faker->numberBetween(1, 4) : NULL,
        ];
    }
}
