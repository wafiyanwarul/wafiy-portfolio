<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutMe;
use App\Models\User;

class AboutMeSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'wafiyanwarulhikam12@gmail.com')->first();
        if ($user) {
            AboutMe::factory()->create([
                'user_id' => $user->id,
                'content' => 'I am a 6th-semester IT student passionate about backend development...',
            ]);
        }
    }
}
