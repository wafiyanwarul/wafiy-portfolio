<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationExperienceFactory extends Factory
{
    protected $model = \App\Models\OrganizationExperience::class;

    public function definition(): array
    {
        return [
            'organization_name' => $this->faker->company(),
            'role' => $this->faker->jobTitle(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->optional()->date(),
            'description' => $this->faker->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
