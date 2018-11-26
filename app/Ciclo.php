<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
	protected $table='ciclo';
    protected $primarykey='id';
    
    public $timestamps=false;

    protected $fillable =[
    'nombre','puntaje'
    ];
}
