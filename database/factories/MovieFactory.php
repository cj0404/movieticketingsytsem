<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;

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
        return [
            'title' => $this->faker->catchPhrase(),
            'genre' => $this->faker->randomElement(['Action', 'Drama', 'Comedy', 'Horror']),
            'duration' => $this->faker->numberBetween(90, 180),
            'rating' => $this->faker->randomElement(['PG', 'PG-13', 'R']),
        ];
    }

    // public function definition(): array
    // {
    //     $genres = ['Action','Comedy','Drama','Horror','Sci-Fi','Romance','Thriller','Animation'];
    //     return [
    //         'title' => $this->faker->unique()->sentence(3),
    //         'genre' => $this->faker->randomElement($genres),
    //         'duration' => $this->faker->numberBetween(80, 180),
    //         'rating' => $this->faker->randomFloat(1, 2, 5),
    //     ];
    // }
}
