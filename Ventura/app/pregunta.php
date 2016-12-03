<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    protected $table ='pregunta'; 
    public $timestamps=false;

    public function respuestas()
{
   return $this->hasMany('App\respuesta');
}

 function categoria()
 {
 	return $this->belongsTo('App\categoria');
 }
}



