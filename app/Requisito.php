<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{

    public $timestamps=false;

    protected $fillable =[
    'nombre','puntaje','id_ciclo'
    ];
}
