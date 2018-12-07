<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HTTP\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use DB;
use Hash;

class BuscarController extends Controller
{
   public function buscar($nombre)
    {	
        $nombres=DB::table('buscar')
        ->where('nombre','LIKE','%'.$nombre.'%')
        ->orderBy('id','asc')->get();
       	return  json_encode($nombres);
     
    }

}
