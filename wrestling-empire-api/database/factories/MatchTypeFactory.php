<?php

namespace Database\Factories;

use App\Models\MatchType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MatchType>
 */
class MatchTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $match_type = $this->faker->randomElement([
        //     'Singles', 
        //     'Tag Team', 
        //     'Team', 
        //     'Triple Threat', 
		// 	'Fatal Four-Way', 
        //     'Handicap', 
        //     'Gauntlet', 
        //     'Battle Royale', 
		// 	'Royal Rumble'
        // ]);

        return [
            // 'name' => $match_type
        ];
    }
}
