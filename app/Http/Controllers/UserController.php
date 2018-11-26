<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\User;
use App\Cargo;
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

    public function store(Request $request)
    {
        
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
