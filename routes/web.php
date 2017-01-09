<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DefensoriaController@index');
Route::get('/defensoria', 'DefensoriaController@defensoria');
Route::get('/derechos', 'DefensoriaController@derechos');
Route::get('/defensora' , 'DefensoriaController@defensora');
Route::get('/comunicate', 'DefensoriaController@formulario');
Route::get('/normatividad', 'DefensoriaController@normatividad');
Route::get('/foro', 'DefensoriaController@foro');
Route::post('v', 'ServiciosController@v');
Route::post('/mensaje', 'MensajesController@nuevo');
Route::get('/interes/agenda', 'DefensoriaController@agenda');
Route::get('/interes/documentos', 'DefensoriaController@documentos');





Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/home/messages', 'HomeController@index' );

Route::get('/home/response/{id?}', 'HomeController@response');

Route::post('/home/newresponse', 'HomeController@newresponse');

Route::post('/home/editarresponse', 'HomeController@editarresponse');

Route::post('/home/deletemessage', 'HomeController@borrarmensaje');

Route::post('/home/approveresponse', 'HomeController@aprobarmensaje');

Route::post('/home/publish', 'HomeController@publishmessage');

Route::post('/home/deleteresponse', 'HomeController@deleteresponse');


/* *******************  Seccion para el tratamiento de documentos  ******************* */
Route::get('/home/documents', 'Documents\DocumentsController@index');
Route::get('/home/documents/new', 'Documents\DocumentsController@new');
Route::post('/home/documents/upload', 'Documents\DocumentsController@upload');
Route::get('/home/documents/delete/{id?}', 'Documents\DocumentsController@delete');


/* *******************  Seccion para el tratamiento de agenda  ******************* */
Route::get('/home/diary', 'Agenda\AgendaController@index');
Route::get('/home/diary/new', 'Agenda\AgendaController@new');
Route::post('/home/diary/add', 'Agenda\AgendaController@add');
Route::get('/home/diary/delete/{id?}', 'Agenda\AgendaController@delete');
Route::get('/home/diary/edit/{id?}', 'Agenda\AgendaController@edit');
Route::post('/home/diary/upload', 'Agenda\AgendaController@upload');