<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function categorie(){
    	$this->belongsTo('App\Categories');
    }

    public function user(){
    	$this->belongsTo('App\User');
    }
}
