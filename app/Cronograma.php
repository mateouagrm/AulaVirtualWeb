<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model
{
 

    public $timestamps=false;

    protected $fillable =[
    'inicio','fin'
    ];
}
