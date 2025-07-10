<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CertificationFactory extends Factory
{
    protected $model = \App\Models\Certification::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'issuer' => $this->faker->company(),
            'issue_date' => $this->faker->date(),
            'certificate_url' => $this->faker->optional()->url(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
