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
Route::get('/formulario', 'DefensoriaController@formulario');
Route::get('/normatividad', 'DefensoriaController@normatividad');
Route::get('/foro', 'DefensoriaController@foro');
Route::post('v', 'ServiciosController@v');
Route::post('/mensaje', 'MensajesController@nuevo');





Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/home/response/{id?}', 'HomeController@response');

Route::post('/home/newresponse', 'HomeController@newresponse');

Route::post('/home/editarresponse', 'HomeController@editarresponse');

Route::post('/home/deletemessage', 'HomeController@borrarmensaje');

Route::post('/home/approveresponse', 'HomeController@aprobarmensaje');

Route::post('/home/publish', 'HomeController@publishmessage');

Route::post('/home/deleteresponse', 'HomeController@deleteresponse');