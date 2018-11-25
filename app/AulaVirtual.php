<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AulaVirtual extends Model
{
    protected $table='ciudad';
    protected $primarykey='id';

    public $timestamps=false;

    protected $fillable =[
    'nombre'
    ];

    
}
