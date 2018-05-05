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

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/registrarse', function () {
    return view('servicios');
});

Route::get('login',array('as'=>'login',function()
    {
            return view('login');
     }
));

Route::get('misdatos', function () {
    return redirect('CLIENTE/misdatos');
});


Route::post('/logear','Auth\LoginController@postLogin');
Route::get('/salir','Auth\LoginController@logout');



//grupo privado
//Route::group(['middleware'=>'auth'],function(){


Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/producto', function () {
    return view('producto');
});


Route::get('/crear_producto', function () {
    return view('PRODUCTO/crear_producto');
});


Route::post('/crearProducto','productoController@create');
Route::post('/update_Producto','productoController@updateProducto');


//busca un producto
Route::post('/producto/search','agregarStockController@search');

//busca un cliente en la bd
Route::post('/cliente/search','usuarioController@search');



Route::get('/agregar_stock', ['as' => 'agregar_stock', 'uses' => 'agregarStockController@index']);




Route::get('/listarproducto', ['as' => 'listarproducto', 'uses' => 'productoController@index']);

Route::get('/registrar_venta', ['as' => 'listaUsuario', 'uses' => 'ventaController@index']);


/*
Route::get('/registrar_venta', function () {
    return view('VENTA/venta');
});
*/


//apertura caja, lista de productos
Route::get('/apertura_caja', ['as' => 'listarproducto', 'uses' => 'productoController@index2']);

/*
Route::get('/apertura_caja', function () {
    return view('VENTA/apertura_caja');
});
*/

Route::get('producto/destroy/{codigoProducto}', ['as' => 'producto/destroy', 'uses'=>'productoController@destroy']);

//logear
//login

    
//clientes
Route::get('/crear_cliente', function () {
    return view('CLIENTE/crear_cliente');
});

//update cliente
Route::post('/update_Usuario','usuarioController@updateCliente');

//update cliente de mis datos
Route::post('usuario/update',['as'=>'usuario/update', 'uses'=>'usuarioController@updateCliente']);




//get mis datos
/*
Route::get('/mis_datos', function () {
    return view('CLIENTE/misdatos');
});
*/
Route::get('/mis_datos', ['as' => 'listar_Personas', 'uses' => 'usuarioController@index2']);



//cierre_caja
Route::get('/cierre_caja', function () {
    return view('VENTA/cierre_caja');
});


//cierre_caja2
Route::get('/cierre_caja2', function () {
    return view('VENTA/cierre_caja2');
});

/*apertura_caja
Route::get('/apertura_caja', function () {
    return view('VENTA/apertura_caja');
});*/

Route::get('/crear_producto', function () {
    return view('PRODUCTO/crear_producto');
});



Route::get('/mesa', function () {
    return view('MESA/mesa');
});


/*
Route::get('/agregar_stock', function () {
    return view('PRODUCTO/agregar_stock');
});
*/

Route::post('/crearPersona','usuarioController@create');

Route::get('/listar_Personas', ['as' => 'listar_Personas', 'uses' => 'usuarioController@index']);

Route::get('persona/destroy/{cedula}', ['as' => 'persona/destroy', 'uses'=>'usuarioController@destroy']);

Route::get('/productosWelcome', ['as' => 'listarproducto', 'uses' => 'productoController@index3']);


//});//cierra grupo


Route::get('/registrarUsuario', function () {
    return view('CLIENTE/registrarUsuario');
});

Route::post('/crearPersona1','usuarioController@create1');