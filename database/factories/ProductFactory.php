<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'name' => fake()->words(3, true),
            'description' => fake()->sentence(12),
            'price' => fake()->numberBetween(50000, 5000000),
            'stock' => fake()->numberBetween(0, 100),
        ];
    }
}