<?php

namespace Database\Seeders;

use App\Models\Homework;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $homeworks = [
            [
                'subjectId' => DB::table('subjects')->where('name', 'Matemáticas')->value('id'),
                'title' => 'Sumas',
                'description' => '2+2=?',
                'qualification' => '10',
                'note' => 'Aplique las reglas de la suma'
            ],
            [
                'subjectId' => DB::table('subjects')->where('name', 'Matemáticas')->value('id'),
                'title' => 'Multiplicación',
                'description' => '2x2=?',
                'qualification' => '10',
                'note' => null
            ],
            [
                'subjectId' => DB::table('subjects')->where('name', 'Lenguaje')->value('id'),
                'title' => 'Acentos',
                'description' => '¿En qué sílaba está el acento? avícola, parada, mamá.',
                'qualification' => '5',
                'note' => 'estas preguntas saldrán en el examen.'
            ],
            [
                'subjectId' => DB::table('subjects')->where('name', 'Inglés')->value('id'),
                'title' => 'vocabulario',
                'description' => 'Como se dice papá en inglés?',
                'qualification' => '100',
                'note' => 'Se calificará la otrtografía.'
            ],
        ];
        foreach ($homeworks as $homework) {
            Homework::updateOrCreate($homework);
        }
    }
}
