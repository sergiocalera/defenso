<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensaje;
use App\Defensora;
use App\Aprobada;
use App\User;
use App\Correo\Correo;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->correo = new Correo();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $mensajes = Mensaje::orderBy('id', 'desc')->paginate(15);
        return view('auth.home', [ 'mensajes' => $mensajes ]);
    }

    public function response(Request $request,$folio){

        $mensaje = "";
        if( $request->isMethod('get') ){
            if( is_int( (int) $folio) ){
                $mensaje = Mensaje::find($folio);
            } else{
                $mensaje = null;
            }
        }

        return view('auth.respuesta', ['mensaje' => $mensaje] );
    }

    public function newresponse( Request $request ){
        $carbon = new \Carbon\Carbon();
        $mensaje = Mensaje::find( $request->input('token_message') );

        $defensora = new Defensora;
        $defensora->respuesta = $request->input('response');
        $defensora->fecha = $carbon->now();
        $defensora->estado = 1;

        $user_id = Auth::user()->id;
        $user = User::find( $user_id );

        $mensaje->defensoras()->save( $defensora );
        $user->defensoras()->save( $defensora );

    }

    public function editarresponse( Request $request ){
        $carbon = new \Carbon\Carbon();
        $defensora = Defensora::find( $request->input('token_respuesta') );
        $defensora->respuesta = $request->response;
        $defensora->fecha = $carbon->now();
        // $defensora->estado = 1;
        // $defensora->save();

        $user_id = Auth::user()->id;
        $user = User::find( $user_id );
        $user->defensoras()->save( $defensora );
    }

    public function borrarmensaje( Request $request ){
        $mensaje = Mensaje::find( $request->input('message') );
        $mensaje->aprobado = false;
        $mensaje->estado = false;
        $mensaje->save();
    }

    public function aprobarmensaje( Request $request ){
        $mensaje = Mensaje::find( $request->input('message') );
        $mensaje->aprobado = true;
        $mensaje->save();

        $user_id = Auth::user()->id;
        $user = User::find( $user_id );

        $aprobada = new Aprobada;

        $mensaje->aprobada()->save( $aprobada );
        $user->aprobadas()->save( $aprobada );
    }

    public function publishmessage( Request $request ){
        $defensora = Defensora::find( $request->input('message') );
        $defensora->estado = 2;
        // $defensora->save();

        $user_id = Auth::user()->id;
        $user = User::find( $user_id );
        $user->defensoras()->save( $defensora );

        $audiencia = $defensora->mensaje->audiencia->nombre;
        $apellido = $defensora->mensaje->audiencia->apellido_paterno;
        $correo = $defensora->mensaje->audiencia->email;
        $nombre_completo = $audiencia . ' ' . $apellido;

        $this->correo->enviarMensajeAudiencia($nombre_completo, $correo, faltan mas datos aqui...);
    }

    public function deleteresponse( Request $request ){
        $defensora = Defensora::find( $request->input('message') );
        $defensora->estado = 3;
        // $defensora->save();

        $user_id = Auth::user()->id;
        $user = User::find( $user_id );
        $user->defensoras()->save( $defensora );
    }
}
