<?php

use Illuminate\Database\Seeder;

class Aula_CicloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*=================================================
AULA CICLO CUANDO SE CREA UN AULA VIRTUAL SE TIENE 
QUE CREAR CON TODOS SUS CICLOS
===================================================*/
        DB::table('aula_ciclo')->insert([
            'id_aula' => '1',
            'id_ciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '1',
            'id_ciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '1',
            'id_ciclo' => '3',
        ]);
/*===============================================
AULA 2
=================================================*/
        DB::table('aula_ciclo')->insert([
            'id_aula' => '2',
            'id_ciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '2',
            'id_ciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '2',
            'id_ciclo' => '3',
        ]);
/*===============================================
AULA 3
=================================================*/
        DB::table('aula_ciclo')->insert([
            'id_aula' => '3',
            'id_ciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '3',
            'id_ciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '3',
            'id_ciclo' => '3',
        ]);
/*===============================================
AULA 4
=================================================*/
        DB::table('aula_ciclo')->insert([
            'id_aula' => '4',
            'id_ciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '4',
            'id_ciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '4',
            'id_ciclo' => '3',
        ]);
/*===============================================
AULA 5
=================================================*/
        DB::table('aula_ciclo')->insert([
            'id_aula' => '5',
            'id_ciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '5',
            'id_ciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '5',
            'id_ciclo' => '3',
        ]);
/*===============================================
AULA 6
=================================================*/
        DB::table('aula_ciclo')->insert([
            'id_aula' => '6',
            'id_ciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '6',
            'id_ciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '6',
            'id_ciclo' => '3',
        ]);
/*===============================================
AULA 7
=================================================*/
        DB::table('aula_ciclo')->insert([
            'id_aula' => '7',
            'id_ciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '7',
            'id_ciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '7',
            'id_ciclo' => '3',
        ]);
/*===============================================
AULA 8
=================================================*/
        DB::table('aula_ciclo')->insert([
            'id_aula' => '8',
            'id_ciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '8',
            'id_ciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '8',
            'id_ciclo' => '3',
        ]);
/*===============================================
AULA 9
=================================================*/
        DB::table('aula_ciclo')->insert([
            'id_aula' => '9',
            'id_ciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '9',
            'id_ciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'id_aula' => '9',
            'id_ciclo' => '3',
        ]);
    }
}
