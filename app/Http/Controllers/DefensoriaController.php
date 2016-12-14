<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aprobada;
use App\Seccion;
use App\Categories;

class DefensoriaController extends Controller
{
    public function index(){
        $secciones = Seccion::orderBy('posicion', 'asc')->get();
        return view('viewIndex/index', [ 'secciones' => $secciones ]);
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
        $aprobadas = Aprobada::orderBy('id', 'desc')->paginate(4);
        return view('viewFormulario.index', ['aprobadas' => $aprobadas]);
    }

    public function normatividad(){
        $documents = collect([
            ['name' => 'Ley del Sistema Público de Radiodifusión del Estado Mexicano.',
             'url' => '/docs/normatividad/ley_sistema_radiodifusion.pdf'], 
            ['name' => 'Lineamientos Generales sobre los Derechos de las Audiencias.', 
             'url' => '/docs/normatividad/lineamientos_derechos_audiencias.pdf'],
            ['name' => 'Ley Federal de Telecomunicaciones y Radiodifusión.',
             'url' => '/docs/normatividad/ley_federal_telecomunicaciones.pdf'],
            ['name' => 'Ley Reglamentaria del Derecho de Réplica.',
             'url' => 'docs/normatividad/ley_derecho_replica.pdf'],
            ['name' => 'Lineamientos de Clasificación de Contenidos Audiovisuales de las Transmisiones Radiodifundidas y del Servicio de Televisión y Audio Restringidos.',
             'url' => 'docs/normatividad/lineamientos_contenidos_audiovisuales.pdf']
        ]);
        return view('viewNormatividad.index', ['documents' => $documents]);
    }

    public function foro(){
    	$aprobadas = Aprobada::orderBy('id', 'desc')->paginate(15);
        return view('viewForo/index', ['aprobadas' => $aprobadas]);
    }

    public function documentos(){
        $categorias = Categories::get();
        return view('viewDocumentos/index', ['categorias' => $categorias]);
    }

    public function agenda(){

        return view('viewAgenda/index');
    }
}
