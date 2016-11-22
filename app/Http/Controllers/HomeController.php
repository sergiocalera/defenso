<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensaje;
use App\Defensora;

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
        $mensaje->defensoras()->save($defensora);
    }
}
