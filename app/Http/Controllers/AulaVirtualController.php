<?php

namespace App\Http\Controllers;

use App\AulaVirtual;
use App\User;
use App\Cronograma;
use Illuminate\Http\Request;
use DB;

class AulaVirtualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $cronograma = Cronograma::All();
        $user = User::All();
        $aula=AulaVirtual::orderBy('id','DESC')->paginate(8);
        return view('administrador.aulaVirtual.index', 
            ["aulas"=>$aula,"user"=>$user,"cronograma"=>$cronograma]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = DB::table('usuario')
         ->where('id_cargo','=',2)
         ->get();
         $cronograma = Cronograma::all();
          return view('administrador.aula.store', ["profesores"=>$profesores,"cronogramas" =>$cronograma]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'materia' =>'required',
                                    'carrera'=>'required',
                                    'idcreador'=>'required',
                                    'idprofesor'=>'required',
                                    'idcronograma'=>'required']);

        if (Categoria::create($request->all())){
            return redirect('administrador-aula')->with('mensajesucces',"registro exitoso");
        }else{
            return redirect('administrador-aula')->with('mensajesucces',"no se pudo guardar");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CiudadCategoria  $ciudadCategoria
     * @return \Illuminate\Http\Response
     */
    public function show(CiudadCategoria $ciudadCategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CiudadCategoria  $ciudadCategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(CiudadCategoria $ciudadCategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CiudadCategoria  $ciudadCategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CiudadCategoria $ciudadCategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CiudadCategoria  $ciudadCategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aula = AulaVirtual::find($id);
        $aula->delete();
        return back();
    }
}
