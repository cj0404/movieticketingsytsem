<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Showtime;

class ShowtimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::all()->each(function (Movie $movie) {
            Showtime::factory(3)->create([
                'movie_id' => $movie->id,
            ]);
        });
    }
}
