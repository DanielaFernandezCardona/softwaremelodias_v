<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use Redirect;
use DB;
use Auth;

class productoController extends Controller
{

    //
 public function index()
 {
   $productos=DB::table('productos')
   ->select('codigoProducto','nombreProducto','descripcion','unidades','preciocompra', 'precioventa', 'imagen')
   ->get();


$person = Auth::user();

  $persona=DB::table('clientes')
  ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
  ->select('clientes.rol')
  ->Where('clientes.cedula',"=",$person->id)
  ->first();


    if($persona->rol=='administrador')
  return view('/PRODUCTO/listarproducto',['productos' => $productos]);

    if($persona->rol=='empleado')
   return view('/PRODUCTO/listarproducto',['productos' => $productos]);

   if($persona->rol=='cliente')
    return view('bienvenido');




 }


 public function index2()
 {
   $productos=DB::table('productos')
   ->select('codigoProducto','nombreProducto','descripcion','unidades','preciocompra', 'precioventa', 'imagen')
   ->get();

   return view('/VENTA/apertura_caja',['productos' => $productos]);

 }



 public function index3()
 {
   $productos=DB::table('productos')
   ->select('nombreProducto','precioventa', 'imagen')
   ->get();

   return view('/PRODUCTO/listaproductoWelcome',['productos' => $productos]);

 }




      /**
         *  Registra un producto
         * @param trae los datos necesarios para crear un registro de la bd.
         * @return vista del registro de productos
         */
      public function create( Request $request)
      {

          //obtenemos el campo file definido en el formulario
       $file = $request->file('imagen');
       
            //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
       //$extension = $file->getClientOriginalExtension();
       
       $dataproductos= array(
        'nombreProducto' => $request->nombreProducto,
        'descripcion' => $request->descripcion,
        'unidades' => $request->unidades,
        'preciocompraunidad' => $request->preciocompraunidad,
        'precioventaunidad' => $request->precioventaproducto,
        'foto' => '/welcome/images/'.$nombre
      );
       
           //producto::crearProductos($dataproductos);
            //var_dump($request);

       DB::table('productos')->insert(array(
         'nombreProducto' => $dataproductos['nombreProducto'],
         'descripcion' => $dataproductos['descripcion'],
         'unidades' => $dataproductos['unidades'],
         'preciocompra' => $dataproductos['preciocompraunidad'],
         'precioventa' => $dataproductos['precioventaunidad'],      
         'imagen' => $dataproductos['foto']
         
       ));

       
       
        //indicamos que queremos guardar un nuevo archivo en el public
       \Storage::disk('public')->put($nombre,  \File::get($file));

  //    return Redirect::to('CLIENTE/crear_cliente')->with('success','Registro Exitoso');

       //return \View('/PRODUCTO/crear_producto')
       //->with('success','Registro Exitoso');
       
  return redirect('crear_producto')->with('success', 'Registro Exitoso');
//  return redirect('crear_cliente')->with('success', 'No se puede registrar más de un empleado ');

     }


     public function updateProducto( Request $request)
     {

       $dataproductos= array(
        'codigo' => $request->formData['codigo'],
        'unidades' => $request->formData['unidadesproducto']
      );

           //producto::producto($dataproductos);
       
       $producto = producto::find($dataproductos['codigo']);
       $unidadTotal=$producto->unidades + $dataproductos['unidades'];


   //$producto->nombreProducto =$copia->nombreProducto;
   //$producto->descripcion = $copia->descripcion;
   //$producto->unidades =
  // $producto->preciocompra = $copia->preciocompra;
   //$producto->precioventa = $copia->precioventa;
   //$producto->imagen = $copia->imagen;
   //$producto->save();  
       
       
       producto::where('codigoProducto',$dataproductos['codigo'])
       ->update(['unidades'=>$unidadTotal ]);
       
       
       var_dump( "proceso Exitoso");
       
     }




     public static function destroy($codigoProducto)
     {


      $producto = producto::find($codigoProducto);
      $producto->delete();

      return redirect('/listarproducto');


    }



    public function restarProducto( Request $request)
    {



     $dataproductos= array(
      'codigo' => $request->formData['codigo'],
      'unidades' => $request->formData['unidadesproducto']
    );

           //producto::producto($dataproductos);
     
     
     
     $producto = producto::find($dataproductos['codigo']);
     $unidadTotal=$producto->unidades - $dataproductos['unidades'];


   //$producto->nombreProducto =$copia->nombreProducto;
   //$producto->descripcion = $copia->descripcion;
   //$producto->unidades =
  // $producto->preciocompra = $copia->preciocompra;
   //$producto->precioventa = $copia->precioventa;
   //$producto->imagen = $copia->imagen;
   //$producto->save();  
     
     
     producto::where('codigoProducto',$dataproductos['codigo'])
     ->update(['unidades'=>$unidadTotal ]);
     
     
     var_dump( "proceso Exitoso Resta");
     
   }

   
 }
