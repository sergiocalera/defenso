<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aprobada;
use App\Seccion;

class DefensoriaController extends Controller
{
    public function index(){
        $secciones = Seccion::orderBy('posicion', 'asc')->get();
        return view('viewIndex/index', [ 'secciones' => $secciones ]);
    }

    public function defensoria(){
        return view('viewDefensoria/index');
    }

    // public function derechos(){
    // 	$derechos = array(
    // 					'I'    => 'Recibir contenidos que reflejen el pluralismo ideológico, político, social y cultural y lingüístico de la Nación.',
    // 					'II'   => 'Recibir programación que incluya diferentes géneros que respondan a la expresión de la diversidad y pluralidad de ideas y opiniones que fortalezcan la vida democrática de la sociedad.',
    // 					'III'  => 'Que se diferencie con claridad la información noticiosa de la opinión de quien la presenta.',
    // 					'IV'   => 'Que se aporten elementos para distinguir entre la publicidad y el contenido de un programa.',
    // 					'V'    => 'Que se respeten los horarios de los programas y que se avise con oportunidad los cambios a la misma y se incluyan avisos parentales.',
    // 					'VI'   => 'Ejercer el derecho de réplica, en términos de la ley reglamentaria.',
    // 					'VII'  => 'Que se mantenga la misma calidad y niveles de audio y video durante la programación, incluidos los espacios publicitarios.',
    // 					'VIII' => 'En la prestación de los servicios de radiodifusión estará prohibida toda discriminación motivada por origen étnico o nacional, el género, la edad, las discapacidades, la condición social, las condiciones de salud, la religión, las opiniones, las preferencias sexuales, el estado civil o cualquier otra que atente contra la dignidad humana y tenga por objeto anular o menoscabar los derechos y libertades de las personas.',
    // 					'IX'   => 'El respeto de los derechos humanos, el interés superior de la niñez, la igualdad de género y la no discriminación.'
    // 					);

    // 	return view('viewDerechos.index', ['derechos' => $derechos]);
    // }

    public function derechos(){
        return view('viewDerechos.index');
    }

    public function defensora(){
        return view('viewDefensora.index');
    }

    public function formulario(){
        return view('viewFormulario.index');
    }

    public function normatividad(){
        return view('viewNormatividad.index');
    }

    public function foro(){
    	$aprobadas = Aprobada::orderBy('id', 'desc')->paginate(15);
        return view('viewForo/index', ['aprobadas' => $aprobadas]);
    }
}
