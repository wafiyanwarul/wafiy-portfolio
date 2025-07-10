<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectImage;
use App\Models\Project;

class ProjectImageSeeder extends Seeder
{
    public function run(): void
    {
        $project = Project::first();
        if ($project) {
            ProjectImage::factory()->create([
                'project_id' => $project->id,
                'image_url' => 'https://ik.imagekit.io/ock8vpbrh/sample.jpg',
                'caption' => 'Project screenshot',
            ]);
        }
    }
}
