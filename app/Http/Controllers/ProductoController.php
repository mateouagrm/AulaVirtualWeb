<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\SubCategoria;
use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Hash;
use DB;

class ProductoController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request)
    {
        if ($request) {
         $query = trim($request->get('searchText'));
         $users = DB::table('users')
         ->where('nombre','LIKE','%'.$query.'%')
         ->orderBy('id','asc')
         ->paginate(8);
         $ciudad = Ciudad::all();

         return view('administrador.producto.index', ["users"=>$users, "searchText"=>$query,"ciudad"=>$ciudad]);
        }
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
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }

        public function categoria(Request $request, $id)
    {
       if ($request->ajax()) {
         $categoria = DB::table('categoria')
         ->where('id_ciudad','=',$id)
         ->get();
         return response()->json([
            'categorias' => $categoria 
         ]); 
       }
    }

      public function subcategoria(Request $request, $id)
    {
       if ($request->ajax()) {
         $subcategoria = DB::table('sub_categoria')
         ->where('id_categoria','=',$id)
         ->get();
         return response()->json([
            'subcategorias' => $subcategoria 
         ]); 
       }
    }
}
