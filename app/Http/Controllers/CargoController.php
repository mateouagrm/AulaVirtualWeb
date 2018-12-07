<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\Buscar;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargo=Cargo::orderBy('id','DESC')->paginate(3);

        return view('administrador.cargo.index', ["cargo"=>$cargo]);
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
        $cargo = new Cargo;
        $cargo->nombre = $request->get('nombre');
        $cargo->save();
        $buscar = new Buscar;
        $buscar->nombre = $request->get('nombre');
        $buscar->tipo = 'cargo';
        $buscar->ruta = 'administrador-cargo';
        $buscar->save();
        return Redirect::to('administrador-cargo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudad $ciudad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->nombre = $request->get('nombre');
        $cargo->update();
        return Redirect::to('administrador-cargo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cargo = cargo::findOrFail($id);
        $cargo->delete();
        return Redirect::to('administrador-cargo');
    }
}
