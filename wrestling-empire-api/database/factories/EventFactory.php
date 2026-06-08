<?php

namespace Database\Factories;

use App\Models\Championship;
use App\Models\Event;
use App\Models\FinishType;
use App\Models\MatchType;
use App\Models\Show;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['PROMO', 'MATCH']);
        $placement = $this->faker->randomElement(['UNDER', 'MID', 'SEMI', 'MAIN']);
        $is_title_match = $this->faker->boolean(50);
        return [
            'type' => $type,
            'placement' => $placement,
            'match_type_id' => $type == 'MATCH' ? MatchType::inRandomOrder()->first()->id : NULL,
            'championship_id' => $is_title_match ? Championship::factory() : NULL,
            'show_id' => Show::inRandomOrder()->first()->id,
            'notes' => $this->faker->randomLetter(),
        ];
    }
}
