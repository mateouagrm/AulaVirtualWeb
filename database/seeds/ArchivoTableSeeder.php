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
            'idrequisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '15/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '1',
            'idrequisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '15/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '1',
            'idrequisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '16/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '1',
            'idrequisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '17/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '1',
            'idrequisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '17/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '1',
            'idrequisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '29/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '1',
            'idrequisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '1',
            'idrequisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '1',
            'idrequisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '1',
            'idrequisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '1',
            'idrequisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '29/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '1',
            'idrequisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '1',
            'idrequisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '1',
            'idrequisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '1',
            'idrequisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '1',
            'idrequisito' => '16',
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
            'idrequisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '15/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '2',
            'idrequisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '15/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '2',
            'idrequisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '16/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '2',
            'idrequisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '17/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '2',
            'idrequisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '17/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '2',
            'idrequisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '29/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '2',
            'idrequisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '2',
            'idrequisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '2',
            'idrequisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '2',
            'idrequisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '2',
            'idrequisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '29/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '2',
            'idrequisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '2',
            'idrequisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '2',
            'idrequisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '2',
            'idrequisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '2',
            'idrequisito' => '16',
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
            'idrequisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '15/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '3',
            'idrequisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '15/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '3',
            'idrequisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '16/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '3',
            'idrequisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '17/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '3',
            'idrequisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '17/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '3',
            'idrequisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '29/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '3',
            'idrequisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '3',
            'idrequisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '3',
            'idrequisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '3',
            'idrequisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '3',
            'idrequisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '29/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '3',
            'idrequisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '3',
            'idrequisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '3',
            'idrequisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '3',
            'idrequisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '29/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '3',
            'idrequisito' => '16',
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
            'idrequisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '4',
            'idrequisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '4',
            'idrequisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '4',
            'idrequisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '4',
            'idrequisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '4',
            'idrequisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '4',
            'idrequisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '4',
            'idrequisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '4',
            'idrequisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '4',
            'idrequisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '4',
            'idrequisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '4',
            'idrequisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '4',
            'idrequisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '4',
            'idrequisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '4',
            'idrequisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '4',
            'idrequisito' => '16',
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
            'idrequisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '5',
            'idrequisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '25/07/2018',
        ]);
   
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '5',
            'idrequisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '5',
            'idrequisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '25/07/2018',
        ]);
       
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '5',
            'idrequisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '5',
            'idrequisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '5',
            'idrequisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '5',
            'idrequisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
       
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '5',
            'idrequisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '5',
            'idrequisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '5',
            'idrequisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '5',
            'idrequisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '5',
            'idrequisito' => '16',
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
            'idrequisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '6',
            'idrequisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '6',
            'idrequisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '6',
            'idrequisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '6',
            'idrequisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '6',
            'idrequisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '6',
            'idrequisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '6',
            'idrequisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '6',
            'idrequisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '6',
            'idrequisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '6',
            'idrequisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '6',
            'idrequisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '6',
            'idrequisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '6',
            'idrequisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '6',
            'idrequisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '6',
            'idrequisito' => '16',
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
            'idrequisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '7',
            'idrequisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '7',
            'idrequisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '7',
            'idrequisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '7',
            'idrequisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '7',
            'idrequisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '7',
            'idrequisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '7',
            'idrequisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '7',
            'idrequisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '7',
            'idrequisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '7',
            'idrequisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '7',
            'idrequisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '7',
            'idrequisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '7',
            'idrequisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '7',
            'idrequisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '7',
            'idrequisito' => '16',
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
            'idrequisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '8',
            'idrequisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '8',
            'idrequisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '8',
            'idrequisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '8',
            'idrequisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '8',
            'idrequisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '8',
            'idrequisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '8',
            'idrequisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '8',
            'idrequisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '8',
            'idrequisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '8',
            'idrequisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '8',
            'idrequisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '8',
            'idrequisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '8',
            'idrequisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '8',
            'idrequisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '8',
            'idrequisito' => '16',
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
            'idrequisito' => '1',
            'enlace' => 'http://roa.uveg.edu.mx/repositorio/educo/46/Ejemplodemensajedebienvenida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'curriculum vitae',
            'id_aula' => '9',
            'idrequisito' => '2',
            'enlace' => 'https://www.modelocurriculum.net/wp-content/formato_hoja_vida.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'ponderacion de notas',
            'id_aula' => '9',
            'idrequisito' => '3',
            'enlace' => 'https://www.um.es/documents/877924/906253/Ponderaciones+UMU+2018.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'carta descriptiva',
            'id_aula' => '9',
            'idrequisito' => '4',
            'enlace' => 'http://www.veracruz.gob.mx/proteccioncivil/wp-content/uploads/sites/5/2018/03/GUIA-PARA-CARTA-DESCRIPTIVA.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'bibliografia',
            'id_aula' => '9',
            'idrequisito' => '5',
            'enlace' => 'http://www.texnia.com/archive/bibliografia-iso.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de diagnostico',
            'id_aula' => '9',
            'idrequisito' => '6',
            'enlace' => 'http://catarina.udlap.mx/u_dl_a/tales/documentos/lad/diaz_o_m/apendiceA.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 2
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'etiquetas',
            'id_aula' => '9',
            'idrequisito' => '7',
            'enlace' => 'http://www.indap.gob.cl/docs/default-source/default-document-library/manual-de-etiquetado-minsal-vf.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'esquema',
            'id_aula' => '9',
            'idrequisito' => '8',
            'enlace' => 'http://academicos.iems.edu.mx/cired/docs/inn/esquemas.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'objetivo',
            'id_aula' => '9',
            'idrequisito' => '9',
            'enlace' => 'https://www.javeriana.edu.co/blogs/algomez/files/OBETIVOS1.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'contenido de la asignatura',
            'id_aula' => '9',
            'idrequisito' => '10',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'preguntas de autoevaluacion',
            'id_aula' => '9',
            'idrequisito' => '11',
            'enlace' => 'https://www.unsam.edu.ar/institutos/incalin/carreras/ContenidoMaestria.pdf',
            'fecha' => '25/07/2018',
        ]);
/*=================================================
REQUISITO DEL CICLO 3
===================================================*/
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion categoria',
            'id_aula' => '9',
            'idrequisito' => '12',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion actividad creada',
            'id_aula' => '9',
            'idrequisito' => '13',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'evaluacion preguntas',
            'id_aula' => '9',
            'idrequisito' => '14',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales actividad creada',
            'id_aula' => '9',
            'idrequisito' => '15',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
        DB::table('archivo')->insert([
            'nombre' => 'avance en parciales preguntas o consignas',
            'id_aula' => '9',
            'idrequisito' => '16',
            'enlace' => 'https://dialnet.unirioja.es/descarga/articulo/1317933.pdf',
            'fecha' => '25/07/2018',
        ]);
    }
}
