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
            'name' => fake()->name(),
            'description' => fake()->paragraph(),
            'options' => json_encode(['blue' => 1, 'red' => 2]),
            'price' => fake()->randomNumber(5,true),
            'stock' => fake()->randomDigit(),
            'category_id' => mt_rand(1,3)
        ];
    }
}
