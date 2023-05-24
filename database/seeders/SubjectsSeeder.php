<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                'teacherId' => DB::table('teachers')->where('name', 'Jessica Polo')->value('id'),
                'name' => 'Matemáticas',
                'description' => 'Matemáticas se enfoca en el estudio de números, operaciones, geometría, álgebra y estadística para desarrollar habilidades de resolución de problemas y razonamiento lógico.'
            ],
            [
                'teacherId' => DB::table('teachers')->where('name', 'Miguel Caballero')->value('id'),
                'name' => 'Lenguaje',
                'description' => 'Lenguaje se centra en el estudio y desarrollo de habilidades lingüísticas, incluyendo la lectura, escritura, gramática y comprensión oral.'
            ],
            [
                'teacherId' => DB::table('teachers')->where('name', 'Jessica Polo')->value('id'),
                'name' => 'inglés',
                'description' => 'Inglés se centra en el estudio del idioma inglés, incluyendo habilidades de comprensión auditiva, expresión oral, lectura y escritura.'
            ],
        ];
        foreach ($subjects as $subject) {
            Subject::updateOrCreate($subject);
        }
    }
}
