<?php

namespace Database\Factories;

use App\Models\Promotion;
use App\Models\Territory;
use App\Models\Wrestler;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Wrestler>
 */
class WrestlerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['MALE', 'FEMALE', 'N/A']);
        $allegiance = $this->faker->randomElement(['HEEL', 'FACE', 'TWEENER']);
        $role = $this->faker->randomElement(['WRESTLER', 'MANAGER', 'BOOKER', 'REFEREE']);
        return [
            'name' => $this->faker->name(strtolower($gender)),
            'gender' => $gender,
            'finisher_name' => $this->faker->randomLetter(),
            'allegiance' => $allegiance,
            'role' => $role,
            'territory_id' => Territory::inRandomOrder()->first()->id,
            'promotion_id' => Promotion::inRandomOrder()->first()->id,
            'popularity' => $this->faker->numberBetween(50,100),
            'strength' => $this->faker->numberBetween(50,100),
            'skill' => $this->faker->numberBetween(50,100),
            'agility' => $this->faker->numberBetween(50,100),
            'stamina' => $this->faker->numberBetween(50,100),
            'attitude' => $this->faker->numberBetween(50,100),
            'manager_id' => NULL,
            'partner_id' => NULL,
            'story_friend_id' => NULL,
            'story_enemy_id' => NULL,
            'real_friend_id' => NULL,
            'real_enemy_id' => NULL
        ];
    }
}
