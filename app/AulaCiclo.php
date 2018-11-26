<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AulaCiclo extends Model
{
    protected $table='aula_ciclo';

    public $timestamps=false;

    protected $fillable =[
  	'id_aula','id_ciclo'
    ];
}
