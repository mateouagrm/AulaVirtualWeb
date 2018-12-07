<?php

use Illuminate\Database\Seeder;

class ArchivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*=================================================
DOCENTE 4 TERRAZA SOTO RICARDO  AULA_VIRTUAL 1 
  'inicio' 	=> '10/07/2018',
   'fin' 	=> '10/11/2018',
===================================================*/
/*=================================================
REQUISITO DEL CICLO 1
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'mensaje de bienvenida',
            'id_aula' => '1',
            'id_requisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '15/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '1',
            'id_requisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '15/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '1',
            'id_requisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '16/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '1',
            'id_requisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '17/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '1',
            'id_requisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '17/07/2018',
        ]);

/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '1',
            'id_requisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '1',
            'id_requisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '29/07/2018',
        ]);
     
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '1',
            'id_requisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '1',
            'id_requisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '29/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '1',
            'id_requisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
       
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '1',
            'id_requisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '1',
            'id_requisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '1',
            'id_requisito' => '16',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
/*=================================================
DOCENTE 5 VEIZAGA GONZALES JOSUE OBED  AULA_VIRTUAL 2 
  'inicio' 	=> '10/07/2018',
   'fin' 	=> '10/11/2018',
===================================================*/
/*=================================================
REQUISITO DEL CICLO 1
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'mensaje de bienvenida',
            'id_aula' => '2',
            'id_requisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '15/07/2018',
        ]);
      
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '2',
            'id_requisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '16/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '2',
            'id_requisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '17/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '2',
            'id_requisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '17/07/2018',
        ]);
    
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '2',
            'id_requisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '2',
            'id_requisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '2',
            'id_requisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '2',
            'id_requisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '2',
            'id_requisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '29/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
       
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '2',
            'id_requisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '2',
            'id_requisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '2',
            'id_requisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '2',
            'id_requisito' => '16',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
/*=================================================
DOCENTE 6 CABELLO MERIDA JUAN RUBEN  AULA_VIRTUAL 3
  'inicio' 	=> '10/07/2018',
   'fin' 	=> '10/11/2018',
===================================================*/
/*=================================================
REQUISITO DEL CICLO 1
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'mensaje de bienvenida',
            'id_aula' => '3',
            'id_requisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '15/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '3',
            'id_requisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '15/07/2018',
        ]);
       
       
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '3',
            'id_requisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '3',
            'id_requisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '3',
            'id_requisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '3',
            'id_requisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '29/07/2018',
        ]);
       
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '3',
            'id_requisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '3',
            'id_requisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '3',
            'id_requisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '3',
            'id_requisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
      
/*=================================================
DOCENTE 7 ARANIBAR QUIROZ MARTHA MONICA  AULA_VIRTUAL 4
  'inicio' => '15/07/2018',
  'fin' => '15/11/2018',
===================================================*/
/*=================================================
REQUISITO DEL CICLO 1
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'mensaje de bienvenida',
            'id_aula' => '4',
            'id_requisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '25/07/2018',
        ]);
        
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '4',
            'id_requisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '4',
            'id_requisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '4',
            'id_requisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '4',
            'id_requisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '25/07/2018',
        ]);
        
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '4',
            'id_requisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '4',
            'id_requisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '4',
            'id_requisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
       
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '4',
            'id_requisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '4',
            'id_requisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '4',
            'id_requisito' => '16',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
DOCENTE 8 AVENDANO GONZALES EUDAL  AULA_VIRTUAL 5
  'inicio'	=> '15/07/2018',
  'fin' 	=> '15/11/2018',
===================================================*/
/*=================================================
REQUISITO DEL CICLO 1
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'mensaje de bienvenida',
            'id_aula' => '5',
            'id_requisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '5',
            'id_requisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '25/07/2018',
        ]);
   
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '5',
            'id_requisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '5',
            'id_requisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '25/07/2018',
        ]);
       
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '5',
            'id_requisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '5',
            'id_requisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '5',
            'id_requisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '5',
            'id_requisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
       
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '5',
            'id_requisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '5',
            'id_requisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '5',
            'id_requisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '5',
            'id_requisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '5',
            'id_requisito' => '16',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);

/*=================================================
DOCENTE 9 ZEBALLOS PAREDES DANIEL LUIS  AULA_VIRTUAL 6
  'inicio'  => '15/07/2018',
  'fin'     => '15/11/2018',
===================================================*/
/*=================================================
REQUISITO DEL CICLO 1
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'mensaje de bienvenida',
            'id_aula' => '6',
            'id_requisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '6',
            'id_requisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '6',
            'id_requisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '6',
            'id_requisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '6',
            'id_requisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '6',
            'id_requisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '6',
            'id_requisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '6',
            'id_requisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '6',
            'id_requisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '6',
            'id_requisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '6',
            'id_requisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '6',
            'id_requisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '6',
            'id_requisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '6',
            'id_requisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '6',
            'id_requisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '6',
            'id_requisito' => '16',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);


/*=================================================
DOCENTE 10 CARVAJAL CORDERO MARCIO  AULA_VIRTUAL 7
  'inicio' => '20/07/2018',
  'fin' => '20/11/2018',
===================================================*/
/*=================================================
REQUISITO DEL CICLO 1
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'mensaje de bienvenida',
            'id_aula' => '7',
            'id_requisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '7',
            'id_requisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '7',
            'id_requisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '7',
            'id_requisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '7',
            'id_requisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '7',
            'id_requisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '7',
            'id_requisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '7',
            'id_requisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '7',
            'id_requisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '7',
            'id_requisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '7',
            'id_requisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '7',
            'id_requisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '7',
            'id_requisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '7',
            'id_requisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '7',
            'id_requisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '7',
            'id_requisito' => '16',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
DOCENTE 11 LAMAS RODRIGUEZ MARCOS RODRIGO  AULA_VIRTUAL 8
  'inicio' => '20/07/2018',
  'fin' => '20/11/2018',
===================================================*/
/*=================================================
REQUISITO DEL CICLO 1
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'mensaje de bienvenida',
            'id_aula' => '8',
            'id_requisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '8',
            'id_requisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '8',
            'id_requisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '8',
            'id_requisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '8',
            'id_requisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '8',
            'id_requisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '8',
            'id_requisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '8',
            'id_requisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '8',
            'id_requisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '8',
            'id_requisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '8',
            'id_requisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '8',
            'id_requisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '8',
            'id_requisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '8',
            'id_requisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '8',
            'id_requisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '8',
            'id_requisito' => '16',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
DOCENTE 12 VALLET VALLET CORRADO  AULA_VIRTUAL 9
  'inicio' => '20/07/2018',
  'fin' => '20/11/2018',
===================================================*/
/*=================================================
REQUISITO DEL CICLO 1
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'mensaje de bienvenida',
            'id_aula' => '9',
            'id_requisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '9',
            'id_requisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '9',
            'id_requisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '9',
            'id_requisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '9',
            'id_requisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '9',
            'id_requisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '9',
            'id_requisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '9',
            'id_requisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '9',
            'id_requisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '9',
            'id_requisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '9',
            'id_requisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '9',
            'id_requisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '9',
            'id_requisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '9',
            'id_requisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '9',
            'id_requisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '9',
            'id_requisito' => '16',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
    }
}
