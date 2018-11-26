<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    public $timestamps=false;

    protected $fillable =[
    'nombre','id_aula','id_requisito','enlace','fecha'
    ];//cesarrrrr
}
