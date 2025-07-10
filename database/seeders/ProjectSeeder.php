<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\User;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'wafiyanwarulhikam12@gmail.com')->first();
        if ($user) {
            Project::factory()->create([
                'user_id' => $user->id,
                'title' => 'Portfolio Website',
                'category' => 'Web',
                'description' => 'A personal portfolio website built with Laravel and Vue.js.',
                'tech_stack' => 'Laravel,Vue.js,MySQL,Tailwind CSS',
                'live_link' => null,
                'github_link' => null,
            ]);
        }
    }
}
