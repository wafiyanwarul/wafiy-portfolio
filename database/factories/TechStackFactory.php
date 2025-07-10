<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TechStackFactory extends Factory
{
    protected $model = \App\Models\TechStack::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS']),
            'icon' => $this->faker->optional()->imageUrl(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
