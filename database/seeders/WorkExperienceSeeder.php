<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\WorkExperience;

class WorkExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'wafiyanwarulhikam12@gmail.com')->first();
        if ($user) {
            WorkExperience::factory()->create([
                'user_id' => $user->id,
                'company' => 'Remote Internship',
                'position' => 'Backend Developer',
                'start_date' => '2025-01-01',
                'end_date' => null,
                'description' => 'Developed RESTful APIs using Laravel 11 and PostgreSQL.',
                'tech_stack' => 'Laravel,PostgreSQL',
            ]);
        }
    }
}
