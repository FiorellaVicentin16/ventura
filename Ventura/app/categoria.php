<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table='categoria';
    public $timestamps=false;

    function pregunta()
    {
    	return $this->hasMany('App\pregunta');
    }
}
