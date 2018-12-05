<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{	
	protected $table='archivo';
    protected $primarykey='id';

    public $timestamps=false;

    protected $fillable =[
    'nombre','id_aula','id_requisito','enlace','fecha'
    ];//cesarrrrr
}
