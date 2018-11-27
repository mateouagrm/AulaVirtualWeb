<?php

namespace App\Http\Controllers;

use App\Requisito;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Hash;
use DB;

class RequisitoController extends Controller
{
    public function __construct(){

    }

    public function index()
    {
       $requisito = Requisito::orderBy('id','desc')->paginate(10);

         return view('administrador.requisito.index', ["requisitos"=>$requisito]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciclos = DB::table('ciclo')
         ->get();
          return view('administrador.ciclo.store', ["ciclos"=>$ciclo]);
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
                                    'puntaje'=>'required'
                                    'id_ciclo'=>'required']);
      
        if (  Requisito::create($request->all())){
            return redirect('administrador-requisito')->with('mensajesucces',"registro exitoso");
        }else{
            return redirect('administrador-requisito')->with('mensajesucces',"no se pudo guardar");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $ciclos = DB::table('ciclo')
         ->get();
         $requisito = Requisito::findOrFail($id);
          return view('administrador.ciclo.edit', ["ciclos"=>$ciclo,"requisito"=>$requisito]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $requisito = Requisito::findOrFail($id);
         $this->validate($request,[ 'nombre'=>'required',
                                    'puntaje'=>'required'
                                    'id_ciclo'=>'required']);
         $requisito->nombre = $request->input('nombre');
         $requisito->puntaje = $request->input('puntaje');
         $requisito->id_ciclo = $request->input('id_ciclo');
      
        if ($requisito->save()){
            return redirect('administrador-requisito')->with('mensajesucces',"registro exitoso");
        }else{
            return redirect('administrador-requisito')->with('mensajesucces',"no se pudo guardar");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
         $requisito = Requisito::findOrFail($id);
         $requisito->delete();
       return  redirect()->route('administrador-requsito.index');
    }

    //     public function categoria(Request $request, $id)
    // {
    //    if ($request->ajax()) {
    //      $categoria = DB::table('categoria')
    //      ->where('id_ciudad','=',$id)
    //      ->get();
    //      return response()->json([
    //         'categorias' => $categoria 
    //      ]); 
    //    }
    // }

    //   public function subcategoria(Request $request, $id)
    // {
    //    if ($request->ajax()) {
    //      $subcategoria = DB::table('sub_categoria')
    //      ->where('id_categoria','=',$id)
    //      ->get();
    //      return response()->json([
    //         'subcategorias' => $subcategoria 
    //      ]); 
    //    }
    // }
}