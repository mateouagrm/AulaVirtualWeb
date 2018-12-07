<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\User;
use App\Cargo;
use App\Buscar;
use Hash;
use DB;


class UserController extends Controller
{
    public function __construct(){

    }

    public function index()
    {   $cargo = Cargo::All();
        $user=User::orderBy('id','DESC')->paginate(3);

        return view('administrador.user.index', ["user"=>$user , "cargo"=>$cargo ]);
    }

    public function create()
    {
        $cargos = Cargo::all();
        return view('administrador.user.store', ["cargos"=>$cargos]);
    }


    public function store(Request $request)
    {
        $this->validate($request,[ 'ci' =>'required',
                                    'codigo'=>'required',
                                    'nombre'=>'required',
                                    'apellido'=>'required',
                                    'celular'=>'required',
                                    'direccion'=>'required',
                                    'email'=>'required',
                                    'password'=>'required',
                                    'id_cargo'=>'required']);
        if (User::create($request->all())){
            $buscar = new Buscar;
            $buscar->nombre = $request->get('nombre');
            $buscar->tipo = 'user';
            $buscar->ruta = 'administrador-users';
            $buscar->save();
            return redirect('administrador-users')->with('mensajesucces',"registro exitoso");
        }else{
            return redirect('administrador-users')->with('mensajesucces',"no se pudo guardar");
        }
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
        $this->validate($request,[ 'ci' =>'required',
                                    'codigo'=>'required',
                                    'nombre'=>'required',
                                    'apellido'=>'required',
                                    'celular'=>'required',
                                    'direccion'=>'required',
                                    'email'=>'required',
                                    'password'=>'required',
                                    'id_cargo'=>'required']);
        $user = User::findOrFail($id);
        $user->ci = $request->get('ci');
        $user->codigo = $request->get('codigo');
        $user->nombre = $request->get('nombre');
        $user->apellido = $request->get('apellido');
        $user->celular = $request->get('celular');
        $user->direccion = $request->get('direccion');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->id_cargo = $request->get('id_cargo');        
        if ($user->update()){
            return redirect('administrador-users')->with('mensajesucces',"modificacion exitosa");
        }else{
            return redirect('administrador-users')->with('mensajesucces',"no se pudo modificar");
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('administrador-users');
    }
    
    public function usuarioConBono(Request $request)
    {

    }

    public function usuarioRecomendado(Request $request)
    {

    }

    public function login(Request $request){
      dd($request);
    }

    public function register(Request $request){
      dd($request);
    }
}
