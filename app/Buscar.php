<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buscar extends Model
{
    protected $table='buscar';
    protected $primarykey='id';

    public $timestamps=false;

    protected $fillable =[
    'nombre','tipo','ruta'
    ];
}
