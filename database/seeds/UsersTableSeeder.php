<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	  App\User::create([
        	'nombre' => 'admininistrador',
	        'email' => 'admin@gmail.com',
	        'idciudad' => rand(1,9),
	        'password' => bcrypt('123456'),
	        'tipo'		=> 'administrador',
	        'remember_token' => str_random(10),
        ]); 
        

    	factory(App\User::class, 24)->create([
        	'tipo'		=> 'coordinador',
        	
        ]);

        factory(App\User::class, 14)->create([
        	'tipo'		=> 'cliente',
        	'idciudad' => null
        ]);

        
    }
}
