<?php

use Illuminate\Database\Seeder;

class CicloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

/*=================================================
CICLOS
===================================================*/
        DB::table('ciclo')->insert([
            'nombre' => 'ciclo 1',
            'puntaje' => '15',
        ]);
        DB::table('ciclo')->insert([
            'nombre' => 'ciclo 2',
            'puntaje' => '60',
        ]);
        DB::table('ciclo')->insert([
            'nombre' => 'ciclo 3',
            'puntaje' => '25',
        ]);
    }
}
