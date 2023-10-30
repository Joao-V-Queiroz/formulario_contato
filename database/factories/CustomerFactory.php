<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'document' => random_int(10000000000, 99999999999),
            'birthdate' => $this->faker->date(),
            'social_link' => $this->faker->url,
        ];
    }
}