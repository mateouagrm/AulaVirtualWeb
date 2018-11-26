<?php

namespace App\Http\Controllers;

use App\Cronograma;
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
        $cronograma=Cronograma::orderBy('id','DESC')->paginate(3);
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
        //
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
    public function update(Request $request, Recomendado $recomendado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recomendado  $recomendado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recomendado $recomendado)
    {
        //
    }
}
