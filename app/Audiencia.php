<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audiencia extends Model
{
    public function mensajes(){
    	return $this->hasMany('App\Mensaje');
    }
}
