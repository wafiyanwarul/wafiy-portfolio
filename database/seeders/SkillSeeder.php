<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use App\Models\User;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'wafiyanwarulhikam12@gmail.com')->first();
        if ($user) {
            Skill::factory()->create([
                'user_id' => $user->id,
                'name' => 'Laravel',
                'proficiency' => 'Advanced',
                'category' => 'Technical',
            ]);
            Skill::factory()->create([
                'user_id' => $user->id,
                'name' => 'Teamwork',
                'proficiency' => 'Intermediate',
                'category' => 'Soft',
            ]);
        }
    }
}
