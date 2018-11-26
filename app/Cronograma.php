<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model
{
 	protected $table='cronograma';
    protected $primarykey='id';
    public $timestamps=false;
    protected $fillable =[
    'inicio','fin'
    ];
}
