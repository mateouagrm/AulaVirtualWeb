<?php

namespace App\Http\Controllers;

use App\Ciclo;
use App\Buscar;
use Illuminate\Http\Request;

class CicloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciclo=Ciclo::orderBy('id','desc')->paginate(5);
        
        return view('administrador.ciclo.index', ["ciclo"=>$ciclo]);
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
        $this->validate($request,[ 'nombre'=>'required',
                                    'puntaje'=>'required']);     
        if ( Ciclo::create($request->all())){
            $buscar = new Buscar;
            $buscar->nombre = $request->get('nombre');
            $buscar->tipo = 'ciclo';
            $buscar->ruta = 'administrador-ciclo';
            $buscar->save();
            return redirect('administrador-ciclo')->with('mensajesucces',"registro exitoso");
        }else{
            return redirect('administrador-ciclo')->with('mensajesucces',"no se pudo guardar");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategoria  $subCategoria
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategoria $subCategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategoria  $subCategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategoria $subCategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategoria  $subCategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[ 'nombre'=>'required',
                                    'puntaje'=>'required']);
        $ciclo = Ciclo::findOrFail($id);
        $ciclo->nombre = $request->get('nombre');
        $ciclo->puntaje = $request->get('puntaje');

        if ($ciclo->update()){
            return redirect('administrador-ciclo')->with('mensajesucces',"editado exitoso");
        }else{
            return redirect('administrador-ciclo')->with('mensajesucces',"no se pudo guardar");
        }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategoria  $subCategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $ciclo = Ciclo::findOrFail($id);
         $ciclo->delete();
       return  redirect()->route('administrador-ciclo.index');
    }
}
