<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'description' => fake()->text,
            'price' => fake()->randomFloat(2, 0, 100),
            'status' => fake()->boolean,
            'expiration_date' => fake()->dateTimeBetween('+1 week', '+1 year')->format('Y-m-d'),
            'index' => fake()->numberBetween(1, 100)
        ];
    }
}
