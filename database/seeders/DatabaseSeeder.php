<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $getDefaultSeeders = [
            TeachersSeeder::class,
            SubjectsSeeder::class,
            HomeworksSeeder::class
        ];

        $this->call(array_merge($getDefaultSeeders));
    }
}

