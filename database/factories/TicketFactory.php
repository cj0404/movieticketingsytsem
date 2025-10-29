<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ticket;
use App\Models\Showtime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    //  protected $model = Ticket::class;

     public function definition(): array
    {
        return [
            'showtime_id' => Showtime::factory(),
            'customer_name' => $this->faker->name(),
            'seat_number' => 'A' . $this->faker->numberBetween(1, 50),
        ];
    }
}

