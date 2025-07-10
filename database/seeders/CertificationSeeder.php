<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certification;
use App\Models\User;

class CertificationSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'wafiyanwarulhikam12@gmail.com')->first();
        if ($user) {
            Certification::factory()->create([
                'user_id' => $user->id,
                'name' => 'Laravel Certification',
                'issuer' => 'Laravel',
                'issue_date' => '2025-01-01',
                'certificate_url' => null,
            ]);
        }
    }
}
