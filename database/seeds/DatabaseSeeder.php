<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
         
         $this->call(CargoTableSeeder::class);
         $this->call(UsuarioTableSeeder::class);
         $this->call(CicloTableSeeder::class);
         $this->call(RequisitoTableSeeder::class);
         $this->call(CronogramaTableSeeder::class);
         $this->call(AulaVirtualTableSeeder::class);  
         $this->call(Aula_CicloTableSeeder::class);     
         $this->call(ArchivoTableSeeder::class);
     
        $this->call(ContadorTableSeeder::class); 
    }
}
