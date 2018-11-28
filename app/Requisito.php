<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
	 protected $table='requisito';
    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable =[
    'nombre','puntaje','id_ciclo'
    ];
}
