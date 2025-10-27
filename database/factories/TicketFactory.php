<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    
    // protected $model = \App\Models\Ticket::class;

    public function definition()
    {
        $rows = range('A', 'H');
        $seat = $this->faker->randomElement($rows) . $this->faker->numberBetween(1,20);
        return [
            'customer_name' => $this->faker->name,
            'seat_number' => $seat,
            'price' => $this->faker->randomFloat(2, 100, 400),
        ];
    }
}
