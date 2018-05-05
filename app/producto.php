<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Redirect;
use DB;


class producto extends Model
{
    //
protected $table = 'productos';
protected $primaryKey='codigoProducto';

/**
    * Registra un cliente en la base de datos
    * @param trae los datos necesarios para crear un registro de la bd.
    * 
    */
   public static function crearProductos($data)
   {

   	//$nombreCompleto=$data['nombres'].$data['apellidos'];

   	 DB::table('productos')->insert(array(
       'nombreProducto' => $data['nombreProducto'],
       'descripcion' => $data['descripcion'],
       'unidades' => $data['unidades'],
       'preciocompra' => $data['preciocompraunidad'],
       'precioventa' => $data['precioventaunidad'],      
       'imagen' => $data['foto']
       
     ));

         
   }


     public static function destroyProducto($codigoProducto)
      {


        $producto = producto::find($codigoProducto);
        $producto->delete();

      }
 


}
