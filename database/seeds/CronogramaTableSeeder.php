<?php

use Illuminate\Database\Seeder;

class CronogramaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*=================================================
CRONOGRAMA
===================================================*/
        DB::table('cronograma')->insert([
            'inicio' => '10/07/2018',
            'fin' => '10/11/2018',
        ]);
        DB::table('cronograma')->insert([
            'inicio' => '15/07/2018',
            'fin' => '15/11/2018',
        ]);
        DB::table('cronograma')->insert([
            'inicio' => '20/07/2018',
            'fin' => '20/11/2018',
        ]);
    }
}
