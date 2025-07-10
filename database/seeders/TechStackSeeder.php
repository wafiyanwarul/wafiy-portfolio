<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TechStack;
use App\Models\User;

class TechStackSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'wafiyanwarulhikam12@gmail.com')->first();
        if ($user) {
            TechStack::factory()->create([
                'user_id' => $user->id,
                'name' => 'Laravel',
                'icon' => null,
            ]);
            TechStack::factory()->create([
                'user_id' => $user->id,
                'name' => 'Vue.js',
                'icon' => null,
            ]);
        }
    }
}
