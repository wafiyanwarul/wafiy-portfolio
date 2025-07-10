<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AboutMeSeeder::class,
            EducationSeeder::class,
            OrganizationExperienceSeeder::class,
            WorkExperienceSeeder::class,
            SkillSeeder::class,
            TechStackSeeder::class,
            ProjectSeeder::class,
            ProjectImageSeeder::class,
            CertificationSeeder::class,
            ContactMessageSeeder::class,
        ]);
    }
}
