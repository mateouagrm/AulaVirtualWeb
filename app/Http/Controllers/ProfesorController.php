<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AulaVirtual;
use App\Requisito;
use App\Ciclo;
use DB;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users = DB::table('users')
         ->where('id_cargo', "=","2")
         ->orderBy('id','asc')
         ->paginate(8);
        
         return view('profesor.index', ["user"=>$users]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function misAulasVirtuales($id)
    {
        $aulaVirtual = AulaVirtual::All()->where('id_profesor',$id);
        $ciclos = Ciclo::All();
        $puntajes = array();
        foreach ($aulaVirtual as $k => $a) {
            $p = 0;
            foreach ($ciclos as $j => $c) {
          $sql="SELECT SUM(re.puntaje) as puntaje from aula_virtual as av 
                inner join archivo as a on a.id_aula = av.id
                inner join requisito as re on a.id_requisito =   re.id
                inner join ciclo as c on re.id_ciclo = c.id
                where  av.id= ". $a->id." and re.id_ciclo=".$c->id;

        $info = DB::select($sql);
        $p = $p + $info[0]->puntaje * $c->puntaje /100;
        }
         $puntajes[$a->id] = $p;
        }

        return view('profesor.misAulasVirtuales', 
            ["aulaVirtual"=>$aulaVirtual, "puntajes" => $puntajes]);
    }


    public function procesoAulaVirtual($id)
    {
        $aulaVirtual = AulaVirtual::find($id);
        $requisito = Requisito::All();
        $enviados = $this->requisitos_enviados($id,$requisito);
        return view('profesor.procesoAulaVirtual', 
            ["aulaVirtual"=>$aulaVirtual,"requisitos"=>$requisito,"enviados"=>$enviados]);
    }
    
    public function requisitos_enviados($id,$requisito){
         $enviados =  array();
        foreach ($requisito as $r) {
         $enviados[] =  $this->envio($id,$r->id);
        }
        return $enviados;
    }
    public function envio($id_aula , $id_requisito)
    {

        $sql="SELECT * FROM archivo as a
            INNER JOIN aula_virtual as av on av.id=a.id_aula
            INNER JOIN requisito as r on a.id_requisito=r.id
            WHERE av.id=$id_aula and r.id=$id_requisito";

        $info = DB::select($sql);

       return $info ? true : false;    
    }


    public function misAulasVirtualesEstadisticas($id)
    {

        $aulaVirtual = AulaVirtual::All()->where('id_profesor',$id);

        $ciclos = Ciclo::All();
        $puntajes_total = array();
        $data_aula = array();
        foreach ($aulaVirtual as $k => $a) {
            $p = 0;
            $puntajes_ciclo = array();
            foreach ($ciclos as $j => $c) {
          $sql="SELECT SUM(re.puntaje) as puntaje from aula_virtual as av 
                inner join archivo as a on a.id_aula = av.id
                inner join requisito as re on a.id_requisito =   re.id
                inner join ciclo as c on re.id_ciclo = c.id
                where  av.id= ". $a->id." and re.id_ciclo=".$c->id;

        $info = DB::select($sql);
        $p = $p + $info[0]->puntaje * $c->puntaje /100;
        $puntajes_ciclo[] = array("Ciclo ".$c->id , $info[0]->puntaje* $c->puntaje /100);
        }
         $puntajes_total[] = array("name" =>$a->materia,
                                    "id" =>$a->materia,
                                    "data" => $puntajes_ciclo );
         $data_aula[] = array("name" => $a->materia,
                                "y" => $p,
                                "drilldown" => $a->materia);
        }
        return view('estadisticas.graficosAulas', 
            ["aulaVirtual"=>$aulaVirtual, "puntajes" => json_encode($data_aula),"puntajeCiclo" => json_encode($puntajes_total)]);
    }
    
}
