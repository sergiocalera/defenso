<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aprobada extends Model
{
    public function mensaje()
    {
        return $this->belongsTo('App\Mensaje');
    }
}
