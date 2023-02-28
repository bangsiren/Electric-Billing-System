<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(), 
            'initial' => fake()->numberBetween(0, 500), 
            'final' => fn ($data) => fake()->numberBetween($data['initial'], 600), 
            'month' => fake()->monthName(),
            'year' => fake()->year(),
            'units' => fake()->randomNumber(2),
            'amount' => fake()->randomFloat(1,0,100), 
            'status' => fake()->randomElement(['pending', 'paid'])
        ];
    }
}
