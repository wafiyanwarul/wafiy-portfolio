<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkExperienceFactory extends Factory
{
    protected $model = \App\Models\WorkExperience::class;

    public function definition(): array
    {
        return [
            'company' => $this->faker->company(),
            'position' => $this->faker->jobTitle(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->optional()->date(),
            'description' => $this->faker->paragraph(),
            'tech_stack' => $this->faker->randomElement(['Laravel,MySQL', 'Vue.js,Tailwind', 'Flutter,Firebase']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
