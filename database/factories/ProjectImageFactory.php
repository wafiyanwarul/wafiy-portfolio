<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectImageFactory extends Factory
{
    protected $model = \App\Models\ProjectImage::class;

    public function definition(): array
    {
        return [
            'project_id' => \App\Models\Project::factory(),
            'image_url' => $this->faker->imageUrl(),
            'caption' => $this->faker->optional()->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
