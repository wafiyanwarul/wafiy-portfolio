<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
{
    protected $model = \App\Models\Education::class;

    public function definition(): array
    {
        return [
            'institution' => $this->faker->company(),
            'degree' => $this->faker->randomElement(['Bachelor of IT', 'Bachelor of CS', 'Diploma']),
            'start_year' => $this->faker->year(),
            'end_year' => $this->faker->optional()->year(),
            'description' => $this->faker->optional()->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
