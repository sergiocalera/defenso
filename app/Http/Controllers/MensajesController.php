<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audiencia;
use App\Mensaje;

class MensajesController extends Controller
{
    public function nuevo(Request $request){
    	if($request->isMethod("post") && $request->has("correo")){
    		$au = new Audiencia;
    		$au->nombre = $request->nombre;
    		$au->apellido_paterno = $request->apaterno;
    		$au->apellido_materno = $request->amaterno;
    		$au->edad = $request->edad;
    		$au->ocupacion = $request->ocupacion;
    		$au->pais = $request->pais;
    		$au->estado = $request->estado;
    		$au->municipio = $request->delegacion;
    		$au->email = $request->correo;
    		$au->save();

            $carbon = new \Carbon\Carbon();
    		$m = new Mensaje;
    		$m->mensaje = $request->mmensaje;
    		$m->publico = ($request->anonimo == "si") ? true : false;
            $m->motivo_mensaje = $request->motivo[0];
    		$m->estado = true;
            $m->fecha = $carbon->now();
    		$au->mensajes()->save($m);

            
    	}
    }
}
