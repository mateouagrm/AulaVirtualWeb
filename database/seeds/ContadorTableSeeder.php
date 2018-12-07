<?php

use Illuminate\Database\Seeder;

class ContadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('contador')->insert([
            'nombre' => 'administrador-cargo',
            'cantidad' => '0',
        ]);
          DB::table('contador')->insert([
            'nombre' => 'administrador-ciclo',
            'cantidad' => '0',
        ]);
          DB::table('contador')->insert([
            'nombre' => 'administrador-cronograma',
            'cantidad' => '0',
        ]);
          DB::table('contador')->insert([
            'nombre' => 'administrador-users',
            'cantidad' => '0',
        ]);
          DB::table('contador')->insert([
            'nombre' => 'administrador-aula-virtual',
            'cantidad' => '0',
        ]);
          DB::table('contador')->insert([
            'nombre' => 'administrador-requisito',
            'cantidad' => '0',
        ]);
           DB::table('contador')->insert([
            'nombre' => 'profesor-aula-virtual',
            'cantidad' => '0',
        ]);
         
    }
}
