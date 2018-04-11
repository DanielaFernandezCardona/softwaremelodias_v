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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/cliente', function () {
    return view('cliente');
});




Route::get('/crear_producto', function () {
    return view('PRODUCTO/crear_producto'); 
});


//clientes
Route::get('/crear_cliente', function () {
    return view('CLIENTE/crear_cliente'); 
});

//cierre_caja
Route::get('/cierre_caja', function () {
    return view('PRODUCTO/cierre_caja'); 
});



Route::post('/crearPersona','usuarioController@create');

Route::get('/listar_Personas', ['as' => 'listar_Personas', 'uses' => 'usuarioController@index']);

Route::get('persona/destroy/{cedula}', ['as' => 'persona/destroy', 'uses'=>'usuarioController@destroy']);






