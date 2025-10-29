<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Showtime;
use App\Models\Movie;

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

     public function definition(): array
     {
         return [
             'movie_id' => Movie::factory(),
             'schedule' => $this->faker->dateTimeBetween('now', '+1 week'),
             'hall_number' => $this->faker->numberBetween(1, 5),
         ];
     }
     
}
