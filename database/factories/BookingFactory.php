<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'description' => fake()->sentence(10),
            'private' => fake()->boolean(),
            'confirmed' => fake()->boolean(),
            'payment-state' => fake()->randomElement(['pending', 'deposit paid', 'part paid', 'paid in full', 'refunded']),
            'date' => fake()->dateTimeThisYear,
            'start' => fake()->time,
            'end' => fake()->time,
            'user_id' => User::factory()
        ];
    }
}
