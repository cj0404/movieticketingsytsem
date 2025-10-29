<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Showtime;
use App\Models\Ticket;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            MovieSeeder::class,
            ShowtimeSeeder::class,
            TicketSeeder::class,
        ]);
    }

}

