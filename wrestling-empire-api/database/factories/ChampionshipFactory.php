<?php

namespace Database\Factories;

use App\Models\Championship;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Championship>
 */
class ChampionshipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $division = $this->faker->randomElement(['TAG', 'WORLD', 'MID', 'WOMENS']);
        return [
            'name' => $this->faker->name(),
            'division' => $division,
            'promotion_id' => Promotion::inRandomOrder()->first()->id,
        ];
    }
}
