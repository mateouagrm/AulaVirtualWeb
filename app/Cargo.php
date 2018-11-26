<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table='cargo';
    protected $primarykey='id';

    public $timestamps=false;

    protected $fillable =[
    'nombre'
    ];
}
