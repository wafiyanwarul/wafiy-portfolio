<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    protected $model = \App\Models\Skill::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Laravel', 'Vue.js', 'MySQL', 'Teamwork', 'Problem Solving']),
            'proficiency' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'category' => $this->faker->randomElement(['Technical', 'Soft']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
