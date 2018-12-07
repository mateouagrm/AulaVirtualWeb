<?php

namespace App\Http\Controllers;

use App\Cronograma;
use App\Buscar;
use Illuminate\Http\Request;

class CronogramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cronograma=Cronograma::orderBy('id','DESC')->paginate(5);
        
        return view('administrador.cronograma.index', ["cronograma"=>$cronograma]);
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
        
        $this->validate($request,[ 'inicio'=>'required',
                                    'fin'=>'required']);
        if (  Cronograma::create($request->all())){
            $buscar = new Buscar;
            $buscar->nombre = $request->get('inicio');
            $buscar->tipo = 'cronograma';
            $buscar->ruta = 'administrador-cronograma';
            $buscar->save();
            return redirect('administrador-cronograma')->with('mensajesucces',"registro exitoso");
        }else{
            return redirect('administrador-cronograma')->with('mensajesucces',"no se pudo guardar");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recomendado  $recomendado
     * @return \Illuminate\Http\Response
     */
    public function show(Recomendado $recomendado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recomendado  $recomendado
     * @return \Illuminate\Http\Response
     */
    public function edit(Recomendado $recomendado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recomendado  $recomendado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[ 'inicio'=>'required',
                                    'fin'=>'required']);
    
        $cronograma = Cronograma::findOrFail($id);
        $cronograma->inicio = $request->input('inicio');
        $cronograma->fin = $request->input('fin');

         if ($cronograma->update()){
            return redirect('administrador-cronograma')->with('mensajesucces',"editado exitoso");
        }else{
            return redirect('administrador-cronograma')->with('mensajesucces',"no se pudo guardar");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recomendado  $recomendado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cronograma = Cronograma::findOrFail($id);
        $cronograma->delete();
        return  redirect()->route('administrador-cronograma.index');
    }
}