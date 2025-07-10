<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactMessage;

class ContactMessageSeeder extends Seeder
{
    public function run(): void
    {
        ContactMessage::factory()->create([
            'name' => 'Wafiy Anwarul Hikam',
            'email' => 'wafiyanwarulhikam12@gmail.com',
            'message' => 'Interested in your portfolio!',
        ]);
    }
}
