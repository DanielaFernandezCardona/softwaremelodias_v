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

/*
Route::get('misdatos', function () {
    return redirect('CLIENTE/misdatos');
});
*/

Route::post('/logear','Auth\LoginController@postLogin');
Route::get('/salir','Auth\LoginController@logout');



//grupo privado
Route::group(['middleware'=>'auth'],function(){


Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/producto', function () {
    return view('producto');
});


Route::get('/crear_producto', function () {

 $person = Auth::user();

  $persona=DB::table('clientes')
  ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
  ->select('clientes.rol')
  ->Where('clientes.cedula',"=",$person->id)
  ->first();

    if($persona->rol=='administrador')
    return view('PRODUCTO.crear_producto');
    if($persona->rol=='empleado')
    return view('PRODUCTO.crear_producto');

   if($persona->rol=='cliente')
    return view('bienvenido');




    
});





Route::get('/updateMesa', function () {
    return view('MESA/updatemesa');
});



Route::post('/crearProducto','productoController@create');
Route::post('/update_Producto','productoController@updateProducto');
Route::post('/search_restar','productoController@restarProducto');


//busca un producto
Route::post('/producto/search','agregarStockController@search');

//busca un cliente en la bd
Route::post('/cliente/search','usuarioController@search');


/*
 * Route para crear una mesa
 */
Route::post('/mesa','mesaController@create');

/*
Route::get('/agregar_stock', ['as' => 'agregar_stock', 'uses' => 'agregarStockController@index']);

*/
Route::get('/agregar_stock', function () {

            
  $person = Auth::user();

  $persona=DB::table('clientes')
  ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
  ->select('clientes.rol')
  ->Where('clientes.users_idUsuario',"=",$person->id)
  ->first();

    if($persona->rol=='administrador')
    return view('PRODUCTO.agregar_stock');
    
    if($persona->rol=='empleado')
    return view('welcome');

   if($persona->rol=='cliente')
    return view('bienvenido');
  
});

Route::get('/inscripcion', function () {
    return view('TORNEO/inscripcion');
});


Route::get('/listarproducto', ['as' => 'listarproducto', 'uses' => 'productoController@index'] , function(){

$person = Auth::user();

  $persona=DB::table('clientes')
  ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
  ->select('clientes.rol')
  ->Where('clientes.cedula',"=",$person->id)
  ->first();

    if($persona->rol=='administrador')
    return view('PRODUCTO.listarproducto');
    if($persona->rol=='empleado')
    return view('PRODUCTO.listarproducto');

   if($persona->rol=='cliente')
    return view('bienvenido');

}



    );

//Route::get('/registrar_venta', ['as' => 'listaUsuario', 'uses' => 'ventaController@index']);



Route::get('/registrar_venta', function () {
    return view('VENTA/venta');
});



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

  $person = Auth::user();

  $persona=DB::table('clientes')
  ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
  ->select('clientes.rol')
  ->Where('clientes.users_idUsuario',"=",$person->id)
  ->first();

    if($persona->rol=='administrador')
    return view('CLIENTE/crear_cliente');

    if($persona->rol=='empleado')
    return view('CLIENTE/crear_cliente');

   if($persona->rol=='cliente')
    return view('bienvenido');
  


});



Route::get('/BienvenidosPanel', function () {
    return view('bienvenido');
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

Route::get('/mis_datos', ['as' => 'datos', 'uses' => 'usuarioController@index2']);



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

$person = Auth::user();

  $persona=DB::table('clientes')
  ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
  ->select('clientes.rol')
  ->Where('clientes.cedula',"=",$person->id)
  ->first();


    if($persona->rol=='administrador')
      return view('PRODUCTO/crear_producto');

    if($persona->rol=='empleado')
    return view('PRODUCTO/crear_producto');

   if($persona->rol=='cliente')
    return view('bienvenido');



   
});


//crear mesa
Route::get('/mesa', function () {
    return view('MESA/mesa');
});

//listar mesa
Route::get('/listar_mesas', ['as' => 'listar_mesas', 'uses' => 'mesaController@index']);



Route::get('mesa/destroy/{codigoMesa}', ['as' => 'mesa/destroy', 'uses'=>'mesaController@destroy']);
Route::get('mesa/edit/{codigoMesa}', ['as' => 'mesa/edit', 'uses'=>'mesaController@editMesa']);
//update mesa
Route::post('mesa/update',['as'=>'mesa/update', 'uses'=>'mesaController@updateMesa']);



Route::post('/reservarmesa','mesaController@reserva_mesa');
Route::get('/listar_reservas', ['as' => 'listar_mesas', 'uses' => 'mesaController@listar_reservas']);





Route::get('/crear_torneo', function () {

$person = Auth::user();

  $persona=DB::table('clientes')
  ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
  ->select('clientes.rol')
  ->Where('clientes.cedula',"=",$person->id)
  ->first();


    if($persona->rol=='administrador')
         return view('TORNEO/crear_torneo');

    if($persona->rol=='empleado')
        return view('TORNEO/crear_torneo');

   if($persona->rol=='cliente')
    return view('bienvenido');

 

});

Route::get('/listar_torneo', function () {
    return view('TORNEO/listar_torneo');
});

Route::get('/reserva_mesa', function () {
    return view('CITAS/reserva_mesa');
});

Route::get('/editar_mesa', function () {
    return view('MESA/editar_mesa');
});

/*
Route::get('/agregar_stock', function () {
    return view('PRODUCTO/agregar_stock');
});
*/

Route::post('/crearPersona','usuarioController@create');

Route::get('/listar_Personas', ['as' => 'listar_Personas', 'uses' => 'usuarioController@index']);

Route::get('persona/destroy/{cedula}', ['as' => 'persona/destroy', 'uses'=>'usuarioController@destroy']);




Route::post('/crearTorneo','torneoController@create');

Route::get('torneoParticipante/registrar/{idAdmin}', ['as' => 'torneoParticipante/registrar', 'uses'=>'torneoController@createParticipante']);

Route::get('torneoParticipante/destroy/{idTorneo}', ['as' => 'torneoParticipante/destroy', 'uses'=>'torneoController@destroy']);


//torneo
/*
Route::get('/crear_torneo', function () {
    return view('TORNEO/crear_torneo');
});
*/
Route::get('/listar_torneo', function () {
    return view('TORNEO/listar_torneo');
});

Route::get('/listar_torneo', ['as' => 'listar_torneo', 'uses' => 'torneoController@index']);





});//cierra grupo


Route::get('/registrarUsuario', function () {
    return view('CLIENTE/registrarUsuario');
});

Route::post('/crearPersona1','usuarioController@create1');

Route::get('/productosWelcome', ['as' => 'listarproducto', 'uses' => 'productoController@index3']);





