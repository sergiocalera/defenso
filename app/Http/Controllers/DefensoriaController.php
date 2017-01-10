<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aprobada;
use App\Seccion;
use App\Categories;
use App\Diary;

class DefensoriaController extends Controller
{
    public function index(){
        // $secciones = Seccion::orderBy('posicion', 'asc')->get();
        // return view('viewIndex/index', [ 'secciones' => $secciones ]);
        return view('viewIndex/index');
    }

    public function defensoria(){
        return view('viewDefensoria/index');
    }

    public function derechos(){
        return view('viewDerechos.index');
    }

    public function defensora(){
        return view('viewDefensora.index');
    }

    public function formulario(){
        /* Esta seccion es la que hay que modificar */
        //$aprobadas = Aprobada::orderBy('id', 'desc')->paginate(4);
        //return view('viewFormulario.index', ['aprobadas' => $aprobadas]);
        return view('viewFormulario.index');
    }

    public function normatividad(){
        $documents = collect([
            ['name' => 'Lineamientos Generales sobre los Derechos de las Audiencias.', 
             'url' => '/docs/normatividad/lineamientos_derechos_audiencias.pdf'],
            ['name' => 'Lineamientos de Clasificación de Contenidos Audiovisuales de las Transmisiones Radiodifundidas y del Servicio de Televisión y Audio Restringidos.',
             'url' => 'docs/normatividad/lineamientos_contenidos_audiovisuales.pdf'],
            ['name' => 'Ley Reglamentaria del Derecho de Réplica.',
             'url' => 'docs/normatividad/ley_derecho_replica.pdf'],
            ['name' => 'Ley Federal de Telecomunicaciones y Radiodifusión.',
             'url' => '/docs/normatividad/ley_federal_telecomunicaciones.pdf']
        ]);
        return view('viewNormatividad.index', ['documents' => $documents]);
    }

    public function foro(){
        /* Esta seccion sera dedicada al foro */
    	$aprobadas = Aprobada::orderBy('id', 'desc')->paginate(10);
        return view('viewForo/index', ['aprobadas' => $aprobadas]);
    }

    public function documentos(){
        $categorias = Categories::get();
        return view('viewDocumentos/index', ['categorias' => $categorias]);
    }

    public function agenda(){
        $diaries = Diary::get();
        return view('viewAgenda/index', ['diaries' => $diaries] );
    }
}
