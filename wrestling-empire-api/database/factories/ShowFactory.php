<?php

namespace Database\Factories;

use App\Models\Show;
use App\Models\Territory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Show>
 */
class ShowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['TV', 'PPV', 'SPECIAL']);
        $show_name = $this->faker->name();
        return [
            'name' => $type != 'TV' ? $show_name : NULL,
            'year' => $this->faker->year(),
            'month' => $this->faker->numberBetween(1, 12),
            'week' => $this->faker->numberBetween(1, 4),
            'type' => $type,
            'territory_id' => Territory::inRandomOrder()->first()->id
        ];
    }
}
