<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(), // Cria uma categoria relacionada
            'name' => $this->faker->name,
            'price' => $this->faker->randomFloat(2, 0, 8),
            'stock' => $this->faker->numberBetween(0, 100),
            'description' => $this->faker->text(200),

        ];
    }
}
