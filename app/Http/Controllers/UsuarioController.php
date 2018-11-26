<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\User;
use App\Ciudad;
use Hash;
use DB;


class UserController extends Controller
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
    	 return view('administrador.usuarioGeneral.index', ["users"=>$users, "searchText"=>$query,"ciudad"=>$ciudad]);
    	}
    }

    public function store(Request $request)
    {
        if(strlen($request->get('nombre'))==0 || strlen($request->get('telefono'))==0 || strlen($request->get('email'))==0 || $request->get('idciudad')==null || $request->get('tipo')==null ){
         return redirect('administrador')->with('mensajeerror',"llene todos los campos");
        }
    	
    	if(preg_match("/^([a-z-A-Z]+[\s]*)+$/",$request->get('nombre')) && preg_match("/^[0-9]{7,15}$/",$request->get('telefono'))
        ){
        	$user = new User;
	        $user->nombre = $request->get('nombre');
	        $user->telefono = $request->get('telefono');
	        $user->email = $request->get('email');
	        $user->idciudad = $request->get('idciudad');
	        $user->tipo = $request->get('tipo');
	        $user->password = bcrypt($request->get('telefono'));
	        $user->save();
 
            return redirect('administrador')->with('mensajesucces',"registro exitoso");
          }else{
            return redirect('administrador')->with('mensajeerror',"campo nombre:solo palabras, campo telefono: solo numeros");
          }

        return Redirect::to('administrador');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    
    public function usuarioConBono(Request $request)
    {
         if ($request) {
            $query = trim($request->get('searchText'));
            $usuarioConBono = DB::table('users as u')
            ->join('bono as b', 'b.id_cliente','=','u.id')
            ->join('recomendado as r', 'b.id_recomendado','=','r.id')
            ->join('producto as p', 'r.id_producto','=','p.id')
            ->join('sub_categoria as sc', 'p.id_subcategoria','=','sc.id')
            ->join('categoria as c', 'sc.id_categoria','=','c.id')
            ->select('u.id','u.nombre as nombreC','u.telefono','u.email','b.monto','r.nombre as nombreR','b.estado','p.titulo','sc.nombre as nombreSC','c.nombre as nombreCa','p.bono')
            ->where('u.nombre','LIKE','%'.$query.'%')
            ->orderBy('u.id','asc')
            ->paginate(8);
            return view('administrador.usuarioConBono.index', ["usuarioConBono"=>$usuarioConBono, "searchText"=>$query]);
           }
    }

        public function usuarioRecomendado(Request $request)
    {
        if ($request) {
         $query = trim($request->get('searchText'));
         $recomendado = DB::table('users as u')
         ->join('recomendado as r', 'r.id_cliente','=','u.id')
         ->join('producto as p', 'r.id_producto','=','p.id')
         ->join('sub_categoria as sc', 'p.id_subcategoria','=','sc.id')
         ->join('categoria as c', 'sc.id_categoria','=','c.id')
         ->select('r.id','r.nombre as nombreR','r.telefono','r.email','u.nombre as nombreC','p.titulo','sc.nombre as nombreSC','c.nombre as nombreCa')
         ->where('r.nombre','LIKE','%'.$query.'%')
         ->orderBy('r.id','asc')
         ->paginate(8);
         return view('administrador.usuarioRecomendado.index', ["recomendado"=>$recomendado, "searchText"=>$query]);
        }    }

  public function login(Request $request){
    dd($request);
  }

  public function register(Request $request){
    dd($request);
  }
}
