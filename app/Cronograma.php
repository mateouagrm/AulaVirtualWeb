<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model
{
    protected $table='categoria';
    protected $primarykey='id';

    public $timestamps=false;

    protected $fillable =[
    'nombre'
    ];
}
