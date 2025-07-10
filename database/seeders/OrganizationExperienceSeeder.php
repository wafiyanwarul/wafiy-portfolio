<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrganizationExperience;
use App\Models\User;

class OrganizationExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'wafiyanwarulhikam12@gmail.com')->first();
        if ($user) {
            OrganizationExperience::factory()->create([
                'user_id' => $user->id,
                'organization_name' => 'Campus IT Club',
                'role' => 'Lead Developer',
                'start_date' => '2023-01-01',
                'end_date' => '2024-12-31',
                'description' => 'Led a team to develop web applications for campus events.',
            ]);
        }
    }
}
