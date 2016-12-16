<?php

namespace App\Http\Controllers\Agenda;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Diary;
use App\User;
use Auth;

class AgendaController extends Controller
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
    	$diaries = Diary::get();
    	return view('diary/index', ['diaries' => $diaries]);
    }

    public function new(){

    	return view('diary/new');
    }

    public function add( Request $request ){
    	$user_id = Auth::user()->id;
    	$user =  User::find( $user_id );

    	$diary = new Diary();
    	$diary->event = $request->input('name_event');
    	$diary->date = $request->input('date-event');
    	$diary->schedule = $request->input('schedule-event');
    	$diary->headquarters = $request->input('headquarters');
    	$diary->address = $request->input('address-event');
    	$diary->url = $request->input('url-event');

    	$user->diaries()->save( $diary );

    	return redirect('home/diary/');
    }

    public function delete( $id ){
    	if( is_int( ( int ) $id ) ){
    		$diaries = Diary::find( $id );
    		$diaries->delete();
    	}
    	return redirect('home/diary');
    }

    public function edit( $id ){
    	if( is_int( ( int ) $id ) ){
    		$diary = Diary::find( $id );
    		if( !is_null( $diary ) ){
	    		return view( 'diary/edit', ['diary' => $diary] );
    		}
    	}
		return redirect('home/diary');
    }

    public function upload( Request $request ){
    	$user_id = Auth::user()->id;
    	$user =  User::find( $user_id );

    	$diary = Diary::find( $request->input('id-event') );
    	$diary->event = $request->input('name_event');
    	$diary->date = $request->input('date-event');
    	$diary->schedule = $request->input('schedule-event');
    	$diary->headquarters = $request->input('headquarters');
    	$diary->address = $request->input('address-event');
    	$diary->url = $request->input('url-event');

    	$user->diaries()->save( $diary );

    	return redirect('home/diary/');
    }
}
