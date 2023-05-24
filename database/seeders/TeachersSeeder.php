<?php

namespace Database\Seeders;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            ['name' => 'Miguel Caballero'],
            ['name' => 'Jessica Polo'],
        ];
        foreach ($teachers as $teacher) {
            Teacher::updateOrCreate($teacher);
        }
    }
}
