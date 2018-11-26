<?php

use Illuminate\Database\Seeder;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargo')->insert([
            'id'        => 1,
            'nombre'    => 'Director',
        ]);
        DB::table('cargo')->insert([
            'id'        => 2,
            'nombre'    => 'Profesor',
        ]);
    }
}
