<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    public function aprobada()
    {
        return $this->hasOne('App\Aprobada', 'mensaje_id');
    }

    public function audiencia(){
    	return $this->belongsTo('App\Audiencia');
    }

    public function defensoras(){
    	return $this->hasMany('App\Defensora');
    }
}
