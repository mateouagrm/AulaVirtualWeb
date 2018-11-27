<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*=================================================
DIRECTOR SISTEMA
===================================================*/
        DB::table('users')->insert([
            'ci' => '123',
            'codigo' => '123',
            'nombre' => 'KATIME ESTHER',
            'apellido' => 'GUTIÉRRREZ BRUNO',
            'celular' => '73643349',
            'direccion' => 'plan 3000',
            'email' => 'cesarfuentes120594@gmail.com',
            'password' => '123456',
            'id_cargo' => '1',
        ]);
/*=================================================
DIRECTOR INFORMATICA
===================================================*/
        DB::table('users')->insert([
            'ci' => '1234',
            'codigo' => '1234',
            'nombre' => 'MODESTO FRANKLIN',
            'apellido' => 'CALDERÓN FLORES',
            'celular' => '73643345',
            'direccion' => 'plan 3000',
            'email' => 'cesarfuentes0594@gmail.com',
            'password' => '123456',
            'id_cargo' => '1',
        ]);
/*=================================================
DIRECTOR REDES
===================================================*/
        DB::table('users')->insert([
            'ci' => '1235',
            'codigo' => '1235',
            'nombre' => 'VICTOR FERNANDO',
            'apellido' => 'MONRROY DIPP',
            'celular' => '76166488',
            'direccion' => 'ramada av irala',
            'email' => 'ro0108@gmail.com',
            'password' => '123456',
            'id_cargo' => '1',
        ]);
/*=================================================
PROFESOR SISTEMA 
TERRAZA SOTO RICARDO     4   -> ORGANIZACION Y METODOS
VEIZAGA GONZALES JOSUE OBED -> BASE DE DATOS I
CABELLO MERIDA JUAN RUBEN   -> FINANZA PARA LA EMPRESA
===================================================*/
        DB::table('users')->insert([
            'ci' => '222',
            'codigo' => '222',
            'nombre' => 'RICARDO',
            'apellido' => 'TERRAZAS SOTO',
            'celular' => '74563463',
            'direccion' => 'plan 3000',
            'email' => 'itfuturocesar@gmail.com',
            'password' => '123456',
            'id_cargo' => '2',
        ]);
        DB::table('users')->insert([
            'ci' => '2223',
            'codigo' => '2223',
            'nombre' => 'JOSUE OBED',
            'apellido' => 'VEIZAGA GONZALES',
            'celular' => '73436736',
            'direccion' => 'plan 3000',
            'email' => 'tonysapgui1@gmail.com',
            'password' => '123456',
            'id_cargo' => '2',
        ]);
        DB::table('users')->insert([
            'ci' => '22243',
            'codigo' => '222343',
            'nombre' => 'JUAN RUBEN',
            'apellido' => 'CABELLO MERIDA',
            'celular' => '74563463',
            'direccion' => 'plan 3000',
            'email' => 'matehusjucha1@gmail.com',
            'password' => '123456',
            'id_cargo' => '2',
        ]);
/*=================================================
PROFESOR INFORMATICA 
ARANIBAR QUIROZ MARTHA MONICA   -> FISICA I
AVENDANO GONZALES EUDAL         -> CALCULO I
ZEBALLOS PAREDES DANIEL LUIS    -> FISICA II
===================================================*/        
        DB::table('users')->insert([
            'ci' => '2225',
            'codigo' => '22235',
            'nombre' => 'MARTHA MONICA',
            'apellido' => 'ARANIBAR QUIROZ',
            'celular' => '76453674',
            'direccion' => 'plan 3000',
            'email' => 'matehusjucha11@gmail.com',
            'password' => '123456',
            'id_cargo' => '2',
        ]);
        DB::table('users')->insert([
            'ci' => '2226',
            'codigo' => '22236',
            'nombre' => 'EUDAL',
            'apellido' => 'AVENDANO GONZALES',
            'celular' => '76453674',
            'direccion' => 'plan 3000',
            'email' => 'matehusjucha1111@gmail.com',
            'password' => '123456',
            'id_cargo' => '2',
        ]);
        DB::table('users')->insert([
            'ci' => '2227',
            'codigo' => '2227',
            'nombre' => 'DANIEL LUIS',
            'apellido' => 'ZEBALLOS PAREDES',
            'celular' => '63464574',
            'direccion' => 'plan 3000',
            'email' => 'futurocesar@gmail.com',
            'password' => '123456',
            'id_cargo' => '2',
        ]);
/*=================================================
PROFESOR REDES 
CARVAJAL CORDERO MARCIO         -> APLICACIONES CON MICROPROCESAD.
LAMAS RODRIGUEZ MARCOS RODRIGO  -> LEGISLAC.EN REDES Y COMUNICACIONES
VALLET VALLET CORRADO           -> PROGRAMACION ENSAMBLADOR
===================================================*/        
        DB::table('users')->insert([
            'ci' => '22234',
            'codigo' => '22234',
            'nombre' => 'MARCIO',
            'apellido' => 'CARVAJAL CORDERO',
            'celular' => '63464575',
            'direccion' => 'av che guevara',
            'email' => 'cesarmundoparati1@gmail.com',
            'password' => '123456',
            'id_cargo' => '2',
        ]);
        DB::table('users')->insert([
            'ci' => '22245',
            'codigo' => '222345',
            'nombre' => 'MARCOS RODRIGO',
            'apellido' => 'LAMAS RODRIGUEZ',
            'celular' => '63463774',
            'direccion' => 'plan 3000',
            'email' => 'matehusjucha111@gmail.com',
            'password' => '123456',
            'id_cargo' => '2',
        ]);
        DB::table('users')->insert([
            'ci' => '22263',
            'codigo' => '222366',
            'nombre' => 'CORRADO',
            'apellido' => 'VALLET VALLET',
            'celular' => '76434674',
            'direccion' => 'plan 3000',
            'email' => 'matehusjucha1121@gmail.com',
            'password' => '123456',
            'id_cargo' => '2',
        ]);
        
    }
}
