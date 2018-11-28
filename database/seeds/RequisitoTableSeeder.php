<?php

use Illuminate\Database\Seeder;

class RequisitoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*=================================================
REQUISITO CICLO 1
===================================================*/
		DB::table('requisito')->insert([
            'nombre' => 'mensaje de bienvenida',
            'puntaje' => '5',
            'id_ciclo' => '1',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'curriculum vitae',
            'puntaje' => '5',
            'id_ciclo' => '1',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'ponderacion de notas',
            'puntaje' => '5',
            'id_ciclo' => '1',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'carta descriptiva',
            'puntaje' => '20',
            'id_ciclo' => '1',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'bibliografia',
            'puntaje' => '5',
            'id_ciclo' => '1',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'preguntas de diagnostico',
            'puntaje' => '60',
            'id_ciclo' => '1',
        ]);
/*=================================================
REQUISITO CICLO 2
===================================================*/
		DB::table('requisito')->insert([
            'nombre' => 'etiquetas',
            'puntaje' => '3',
            'id_ciclo' => '2',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'esquema',
            'puntaje' => '3',
            'id_ciclo' => '2',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'objetivo',
            'puntaje' => '4',
            'id_ciclo' => '2',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'contenido de la asignatura',
            'puntaje' => '70',
            'id_ciclo' => '2',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'puntaje' => '20',
            'id_ciclo' => '2',
        ]);
/*=================================================
REQUISITO CICLO 3
===================================================*/
		DB::table('requisito')->insert([
            'nombre' => 'evaluacion categoria',
            'puntaje' => '5',
            'id_ciclo' => '3',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'evaluacion actividad creada',
            'puntaje' => '5',
            'id_ciclo' => '3',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'evaluacion preguntas',
            'puntaje' => '60',
            'id_ciclo' => '3',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'puntaje' => '10',
            'id_ciclo' => '3',
        ]);
        DB::table('requisito')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'puntaje' => '20',
            'id_ciclo' => '3',
        ]);
    }
}
