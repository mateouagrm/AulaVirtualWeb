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
            'idaula' => '1',
            'idciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '1',
            'idciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '1',
            'idciclo' => '3',
        ]);
/*===============================================
AULA 2
=================================================*/
        DB::table('aula_ciclo')->insert([
            'idaula' => '2',
            'idciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '2',
            'idciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '2',
            'idciclo' => '3',
        ]);
/*===============================================
AULA 3
=================================================*/
        DB::table('aula_ciclo')->insert([
            'idaula' => '3',
            'idciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '3',
            'idciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '3',
            'idciclo' => '3',
        ]);
/*===============================================
AULA 4
=================================================*/
        DB::table('aula_ciclo')->insert([
            'idaula' => '4',
            'idciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '4',
            'idciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '4',
            'idciclo' => '3',
        ]);
/*===============================================
AULA 5
=================================================*/
        DB::table('aula_ciclo')->insert([
            'idaula' => '5',
            'idciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '5',
            'idciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '5',
            'idciclo' => '3',
        ]);
/*===============================================
AULA 6
=================================================*/
        DB::table('aula_ciclo')->insert([
            'idaula' => '6',
            'idciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '6',
            'idciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '6',
            'idciclo' => '3',
        ]);
/*===============================================
AULA 7
=================================================*/
        DB::table('aula_ciclo')->insert([
            'idaula' => '7',
            'idciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '7',
            'idciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '7',
            'idciclo' => '3',
        ]);
/*===============================================
AULA 8
=================================================*/
        DB::table('aula_ciclo')->insert([
            'idaula' => '8',
            'idciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '8',
            'idciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '8',
            'idciclo' => '3',
        ]);
/*===============================================
AULA 9
=================================================*/
        DB::table('aula_ciclo')->insert([
            'idaula' => '9',
            'idciclo' => '1',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '9',
            'idciclo' => '2',
        ]);
        DB::table('aula_ciclo')->insert([
            'idaula' => '9',
            'idciclo' => '3',
        ]);
    }
}
