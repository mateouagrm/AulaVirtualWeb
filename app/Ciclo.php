<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{

    public $timestamps=false;

    protected $fillable =[
    'nombre','puntaje'
    ];
}
