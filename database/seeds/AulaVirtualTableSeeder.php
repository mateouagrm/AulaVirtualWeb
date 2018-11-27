<?php

use Illuminate\Database\Seeder;

class AulaVirtualTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*=================================================
AULA VIRTUAL DIRECTOR 1
PROFESOR SISTEMA 
TERRAZA SOTO RICARDO        -> ORGANIZACION Y METODOS
VEIZAGA GONZALES JOSUE OBED -> BASE DE DATOS I
CABELLO MERIDA JUAN RUBEN   -> FINANZA PARA LA EMPRESA
===================================================*/

        DB::table('aula_virtual')->insert([
            'id_creador' => '1',
            'id_profesor' => '4',
            'id_cronograma' => '1',
            'materia' => 'ORGANIZACION Y METODOS',
            'carrera' => 'ING EN SISTEMA',
        ]);
        DB::table('aula_virtual')->insert([
            'id_creador' => '1',
            'id_profesor' => '5',
            'id_cronograma' => '1',
            'materia' => 'BASE DE DATOS I',
            'carrera' => 'ING EN SISTEMA',
        ]);
        DB::table('aula_virtual')->insert([
            'id_creador' => '1',
            'id_profesor' => '6',
            'id_cronograma' => '1',
            'materia' => 'FINANZA PARA LA EMPRESA',
            'carrera' => 'ING EN SISTEMA',
        ]);
/*=================================================
AULA VIRTUAL DIRECTOR 2
PROFESOR INFORMATICA 
ARANIBAR QUIROZ MARTHA MONICA   -> FISICA I
AVENDANO GONZALES EUDAL         -> CALCULO I
ZEBALLOS PAREDES DANIEL LUIS    -> FISICA II
===================================================*/
		DB::table('aula_virtual')->insert([
            'id_creador' => '2',
            'id_profesor' => '7',
            'id_cronograma' => '2',
            'materia' => 'FISICA I',
            'carrera' => 'ING EN INFORMATICA',
        ]);
        DB::table('aula_virtual')->insert([
            'id_creador' => '2',
            'id_profesor' => '8',
            'id_cronograma' => '2',
            'materia' => 'CALCULO I',
            'carrera' => 'ING EN INFORMATICA',
        ]);
        DB::table('aula_virtual')->insert([
            'id_creador' => '2',
            'id_profesor' => '9',
            'id_cronograma' => '2',
            'materia' => 'FISICA II',
            'carrera' => 'ING EN INFORMATICA',
        ]);
/*=================================================
AULA VIRTUAL DIRECTOR 3
PROFESOR REDES 
CARVAJAL CORDERO MARCIO         -> APLICACIONES CON MICROPROCESAD.
LAMAS RODRIGUEZ MARCOS RODRIGO  -> LEGISLAC.EN REDES Y COMUNICACIONES
VALLET VALLET CORRADO           -> PROGRAMACION ENSAMBLADOR
===================================================*/
		DB::table('aula_virtual')->insert([
            'id_creador' => '3',
            'id_profesor' => '10',
            'id_cronograma' => '3',
            'materia' => 'APLICACIONES CON MICROPROCESAD',
            'carrera' => 'ING EN REDES Y TELECOMUNICACIONES',
        ]);
        DB::table('aula_virtual')->insert([
            'id_creador' => '3',
            'id_profesor' => '11',
            'id_cronograma' => '3',
            'materia' => 'LEGISLAC.EN REDES Y COMUNICACIONES',
            'carrera' => 'ING EN REDES Y TELECOMUNICACIONES',
        ]);
        DB::table('aula_virtual')->insert([
            'id_creador' => '3',
            'id_profesor' => '12',
            'id_cronograma' => '3',
            'materia' => 'PROGRAMACION ENSAMBLADOR',
            'carrera' => 'ING EN REDES Y TELECOMUNICACIONES',
        ]);
    }
}
