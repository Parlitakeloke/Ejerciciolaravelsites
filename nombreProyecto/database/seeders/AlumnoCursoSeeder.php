<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Curso;


class AlumnoCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $alumnito = Alumno::all();
        $cursito = Curso::all();

        foreach ($alumnito as $alumno) {
            // cursosMatriculados = $cursos -> random(rand(1, 3)); $alumno->cursos()->attach($cursosMatriculados);
                $alumno->cursos()->attach(
                    $cursito->random(rand(1, 3)));
                }

    }
}
