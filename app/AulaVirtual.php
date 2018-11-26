<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AulaVirtual extends Model
{
    protected $table='aula_virtual';

    public $timestamps=false;

    protected $fillable =[
    'materia','carrera','id_creador','id_profesor','id_cronograma'
    ];

    
}
