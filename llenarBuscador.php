<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\AulaVirtual;
use App\Ciclo;
use App\Cronograma;
use App\Requisito;
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
        foreach ($cargo as $x) {
            $buscar = new Buscar;
            $buscar->nombre = $x->nombre;
            $buscar->tipo = 'cargo';
            $buscar->ruta = 'administrador-cargo';
            $buscar->save();
        }
        $aula=AulaVirtual::orderBy('id','DESC')->paginate(8);
        foreach ($aula as $x) {
                    $buscar = new Buscar;
                    $buscar->nombre = $x->materia;
                    $buscar->tipo = 'aula_virtual';
                    $buscar->ruta = 'administrador-aula-virtual';
                    $buscar->save();
                }
        $ciclo=Ciclo::orderBy('id','desc')->paginate(5);
        foreach ($ciclo as $x) {
                    $buscar = new Buscar;
                    $buscar->nombre = $x->nombre;
                    $buscar->tipo = 'ciclo';
                    $buscar->ruta = 'administrador-ciclo';
                    $buscar->save();
                }
        $cronograma=Cronograma::orderBy('id','DESC')->paginate(5);
        foreach ($cronograma as $x) {
                    $buscar = new Buscar;
                    $buscar->nombre = $x->inicio;
                    $buscar->tipo = 'cronograma';
                    $buscar->ruta = 'administrador-cronograma';
                    $buscar->save();
                }
        $requisito = Requisito::orderBy('id','desc')->paginate(10);
        foreach ($requisito as $x) {
                    $buscar = new Buscar;
                    $buscar->nombre = $x->nombre;
                    $buscar->tipo = 'requisito';
                    $buscar->ruta = 'administrador-requisito';
                    $buscar->save();
                }
        $user=User::orderBy('id','DESC')->paginate(3);
        foreach ($user as $x) {
                    $buscar = new Buscar;
                    $buscar->nombre = $x->nombre;
                    $buscar->tipo = 'user';
                    $buscar->ruta = 'administrador-users';
                    $buscar->save();
                }
        return view('administrador.cargo.index', ["cargo"=>$cargo]);
    }
}
