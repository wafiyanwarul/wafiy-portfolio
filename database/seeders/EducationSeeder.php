<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;
use App\Models\User;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'wafiyanwarulhikam12@gmail.com')->first();
        if ($user) {
            Education::factory()->create([
                'user_id' => $user->id,
                'institution' => 'Your University Name',
                'degree' => 'Bachelor of Informatics Engineering',
                'start_year' => 2022,
                'end_year' => null,
                'description' => 'Currently pursuing a degree in Informatics Engineering, focusing on software development.',
            ]);
        }
    }
}
