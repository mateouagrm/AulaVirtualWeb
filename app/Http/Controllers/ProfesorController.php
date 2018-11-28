<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AulaVirtual;
use App\Requisito;
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
        //
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

    public function misAulasVirtuales()
    {
        $aulaVirtual = AulaVirtual::All()->where('id_profesor','7');
        return view('profesor.misAulasVirtuales', 
            ["aulaVirtual"=>$aulaVirtual]);
    }


    public function procesoAulaVirtual($id)
    {
        $aulaVirtual = AulaVirtual::findOrFail($id);
        $requisito = Requisito::All();

        return view('profesor.procesoAulaVirtual', 
            ["aulaVirtual"=>$aulaVirtual,"requisitos"=>$requisito]);
    }

    public function envio($id_aula , $id_requisito)
    {

        $sql="SELECT * FROM archivo as a
INNER JOIN aula_virtual as av on av.id=a.id_aula
INNER join requisito as r on a.id_requisito=r.id
WHERE av.id=$id_aula and r.id=$id_requisito";

        $info = DB::select($sql);

        if ($info) {
            dd("true");
        }else{
            dd("false");
        }
        
    }
    
}
