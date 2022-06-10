<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->unique(true)->randomElement(["Luke Hemmings", "Calum Hood", "Ashton Irwin", "Michael Clifford", "Andy Caduyac"]),
            'arrival_date' => $this->faker->dateTimeBetween('now','+1 week'),
            'departure_date' => $this->faker->dateTimeBetween('+2 week','+3 week'),
            'type' => $this->faker->unique(true)->randomELement(["Single", "Double", "Triple","Quad", "Queen", "King"]),
        ];
    }
}
