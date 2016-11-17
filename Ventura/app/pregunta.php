<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    protected $table ='pregunta'; 
    public $timestamps=false;

    function Categoria()
{
   return $this->hasMany('App\respuesta');
}
}



