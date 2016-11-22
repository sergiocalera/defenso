<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ServiciosController extends Controller
{
    public function v(){

    	return view('viewWebService/v');
    }
}
