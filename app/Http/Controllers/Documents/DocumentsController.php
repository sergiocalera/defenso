<?php

namespace App\Http\Controllers\Documents;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
use App\Document;
use App\User;
use Auth;

class DocumentsController extends Controller
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

    public function index(){
        // $documentos = Document::where('active','=','1')->get();
        $categorias = Categories::get();
        // return view('documents/index', ['documentos' => $documentos]);
    	return view('documents/index', ['categorias' => $categorias]);
    }

    public function new(){
    	$categories = Categories::get();
    	return view('documents/new', ['categories'=>$categories]);
    }

    public function upload(Request $request){
        $categoria = $request->input('categorie_document');
        $titulo = $request->input('title_document');
        $archivos = $request->file('file_document');

        $categoria = Categories::find( $categoria );
        $carbon = new \Carbon\Carbon();

        if(!empty($archivos)){
            foreach ($archivos as $archivo) {
                // Storage::put($archivo->getClientOriginalName(), file_get_contents($archivo));
                $archivo->move( "docs/documents", $archivo->getClientOriginalName() );

                $doc = new Document();
                $doc->file = $archivo->getClientOriginalName();
                $doc->title = $titulo;
                $doc->date = $carbon->now();
                $doc->active = true;

                $user_id = Auth::user()->id;
                $user = User::find( $user_id );

                $categoria->documents()->save($doc);
                $user->documents()->save($doc);

            }
        }

        return redirect('home/documents');
    }

    public function delete($id){
        if( is_int( (int) $id) ){
            $doc = Document::find($id);
            $doc->active = false;
            $doc->save();
        }
        return redirect('home/documents');
    }
}
