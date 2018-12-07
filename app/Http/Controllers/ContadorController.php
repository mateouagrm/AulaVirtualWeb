<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ContadorController extends Controller
{
        public function updateView($nombre)
    {
            DB::table('contador')
                ->where('nombre', $nombre)
                ->increment('cantidad');
            $views = DB::table('contador')
                ->where('nombre', $nombre)->first();
        return json_encode($views);
    }
}
