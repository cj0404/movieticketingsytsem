<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Showtime;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Showtime::all()->each(function ($showtime) {
            $count = rand(4, 8);
            Ticket::factory($count)->create([
                'showtime_id' => $showtime->id,
            ]);
        });
    }
}
