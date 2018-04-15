<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use Redirect;
use DB;


class productoController extends Controller
{
    //
     public function index()
        {
     $productos=DB::table('productos')
                ->select('codigoProducto','nombreProducto','descripcion','unidades','preciocompra', 'precioventa', 'imagen')
                ->get();

                 return view('/PRODUCTO/listarproducto',['productos' => $productos]);

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
               $extension = $file->getClientOriginalExtension();


            
            $dataproductos= array(
                'nombreProducto' => $request->nombreProducto,
                'descripcion' => $request->descripcion,
                'unidades' => $request->unidades,
                'preciocompraunidad' => $request->preciocompraunidad,
                'precioventaunidad' => $request->precioventaproducto,
                'foto' => './storage/'.$nombre
            );
            
           producto::crearProducto($dataproductos);
            //var_dump($request);

            
        //indicamos que queremos guardar un nuevo archivo en el public
       \Storage::disk('public')->put($nombre,  \File::get($file));

  //    return Redirect::to('CLIENTE/crear_cliente')->with('success','Registro Exitoso');

       return \View('/PRODUCTO/crear_producto')
                ->with('success','Registro Exitoso');
              

        }

          
}
