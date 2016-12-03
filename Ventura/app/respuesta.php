<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class respuesta extends Model
{
    
    protected $table ='respuesta'; 
    public $timestamps=false;

    function pregunta()
{
	return $this->belongsTo('App\pregunta');
}
}

