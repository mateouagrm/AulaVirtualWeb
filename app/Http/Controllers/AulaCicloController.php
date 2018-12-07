<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Buscar;
use Illuminate\Http\Request;

class AulaCicloController extends Controller
{

    public function index()
    {
        //$categoria = Categoria::all()->paginate(3);
        $categoria=Categoria::orderBy('id','DESC')->paginate(3);
        return view('administrador.categoria.index', ["categoria"=>$categoria]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request,[ 'nombre'=>'required']);
        Categoria::create($request->all());
        if (Categoria::create($request->all())){
            $buscar = new Buscar;
            $buscar->nombre = $request->get('nombre');
            $buscar->tipo = 'aula_ciclo';
            $buscar->ruta = 'administrador-ciclo';
            $buscar->save();
            return redirect('administrador-categoria')->with('mensajesucces',"registro exitoso");
        }else{
            return redirect('administrador-categoria')->with('mensajesucces',"no se pudo guardar");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
