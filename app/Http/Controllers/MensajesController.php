<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audiencia;
use App\Mensaje;
use App\Correo\Correo;

class MensajesController extends Controller{

    private $correo = null;

    public function __construct(){
        $this->correo = new Correo();
    }

    public function nuevo(Request $request){

        $opcion = false;
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
            $m->motivo_mensaje = ($request->motivo[0] == null ) ? "Comentario" : $request->motivo[0];
    		$m->estado = true;
            $m->fecha = $carbon->now();
    		$au->mensajes()->save($m);
            $opcion = true;

            $datos = collect([
                    'Nombre'            => $au->nombre,
                    'Apellido Paterno'  => $au->apellido_paterno,
                    'Apellido Materno'  => $au->apellido_materno,
                    'Edad'              => $au->edad,
                    'Ocupacion'         => $au->ocupacion,
                    'Correo'            => $au->email,
                    'País'              => $au->pais,
                    'Estado'            => $au->estado,
                    'Municipio'         => $au->municipio,
                    'Mensaje'           => $m->mensaje
                ]);

            $this->correo->enviarMensajeDefensora( 'Sistema de Defensoria', 'defensoria@tveducativa.gob.mx', $request->nombre . " " . $request->apaterno, $request->correo, $m->id, $datos);
            return "<div class='alert alert-success' role='alert'><p>Mensaje Enviado</p></div>";
    	} else{
            $opcion = false;
        }

        return view('viewFormulario.mensajes', ["opcion" => $opcion]);
    }
}
