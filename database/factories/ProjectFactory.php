<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = \App\Models\Project::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'category' => $this->faker->randomElement(['Web', 'Mobile', 'Graphic Design', 'Other']),
            'description' => $this->faker->paragraph(),
            'tech_stack' => $this->faker->randomElement(['Laravel,MySQL', 'Vue.js,Tailwind', 'Flutter,Firebase']),
            'live_link' => $this->faker->optional()->url(),
            'github_link' => $this->faker->optional()->url(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
