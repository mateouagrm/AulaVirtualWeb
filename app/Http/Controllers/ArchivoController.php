<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivoController extends Controller
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
        $requisitos = Requisito::all();
        $aulas = AulaVirtual::all();
        return view('administrador.archivo.store', ["requisitos"=>$requisitos, "aulas"=>$aulas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $this->validate($request,[ 'archivo' =>'required',
                                    'fecha'=>'required',
                                    'id_aula'=>'required',
                                    'id_requisito'=>'required']);
        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $nombre = time.$file->getClientOriginalName();
            $file->move(public_path().'/archivos/', $nombre);
        }
        $archivo = new Archivo();
        $archivo->nombre = $nombre;
        $archivo->fecha = $request->input('fecha');
        $archivo->id_aula = $request->input('id_aula');
        $archivo->id_requisito = $request->input('id_requisito');
        $archivo->save();
        return save;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bono  $bono
     * @return \Illuminate\Http\Response
     */
    public function show(Bono $bono)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bono  $bono
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bono  $bono
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bono  $bono
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
