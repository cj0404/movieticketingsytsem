<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    // protected $model = \App\Models\Movie::class;
    public function definition(): array
    {
        $genres = ['Action','Comedy','Drama','Horror','Sci-Fi','Romance','Thriller','Animation'];
        return [
            'title' => $this->faker->unique()->sentence(3),
            'genre' => $this->faker->randomElement($genres),
            'duration' => $this->faker->numberBetween(80, 180),
            'rating' => $this->faker->randomFloat(1, 2, 5),
        ];
    }
}
