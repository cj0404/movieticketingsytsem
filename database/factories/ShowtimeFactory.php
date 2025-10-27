<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Showtime>
 */
class ShowtimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    // protected $model = \App\Models\Showtime::class;
    public function definition()
    {
        return [
            'schedule' => $this->faker->dateTimeBetween('-1 month', '+2 months'),
            'hall_number' => $this->faker->numberBetween(1, 6),
        ];
    }
}
