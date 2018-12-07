<?php

namespace App\Http\Controllers;

use App\AulaVirtual;
use App\User;
use App\Cronograma;
use App\Buscar;
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
        $director = User::All()->where('id_cargo','1');
        $profesor = User::All()->where('id_cargo','2');
        $aula=AulaVirtual::orderBy('id','DESC')->paginate(8);
        
        return view('administrador.aulaVirtual.index', 
            ["aulas"=>$aula,"director"=>$director,"profesor"=>$profesor,"cronograma"=>$cronograma]);
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
                                    'id_creador'=>'required',
                                    'id_profesor'=>'required',
                                    'id_cronograma'=>'required']);
        if (AulaVirtual::create($request->all())){
            $buscar = new Buscar;
            $buscar->nombre = $request->get('materia');
            $buscar->tipo = 'aula_virtual';
            $buscar->ruta = 'administrador-aula-virtual';
            $buscar->save();
            return redirect('administrador-aula-virtual')->with('mensajesucces',"registro exitoso");
        }else{
            return redirect('administrador-aula-virtual')->with('mensajesucces',"no se pudo guardar");
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
    public function update(Request $request, $id)
    {
        $this->validate($request,[ 'materia' =>'required',
                                    'carrera'=>'required',
                                    'id_creador'=>'required',
                                    'id_profesor'=>'required',
                                    'id_cronograma'=>'required']);
        $aulaVirtual = AulaVirtual::findOrFail($id);
        $aulaVirtual->materia = $request->get('materia');
        $aulaVirtual->carrera = $request->get('carrera');
        $aulaVirtual->id_creador = $request->get('id_creador');
        $aulaVirtual->id_profesor = $request->get('id_profesor');
        $aulaVirtual->id_cronograma = $request->get('id_cronograma');
        if ($aulaVirtual->update()){
            return redirect('administrador-aula-virtual')->with('mensajesucces',"actualizacion exitosa");
        }else{
            return redirect('administrador-aula-virtual')->with('mensajesucces',"no se pudo actualizar");
        }
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
        return  redirect()->route('administrador-aula-virtual.index');
    }
}
