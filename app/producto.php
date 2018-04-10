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
   public static function crearProducto($data)
   {

   	//$nombreCompleto=$data['nombres'].$data['apellidos'];

   	 DB::table('productos')->insert(array(
       'nombreProducto' => $nombreCompleto ,
       'descripcion' => $data['descripcion'],
       'unidades' => $unidadesdata['unidades'],
       'precioCompraUnidad' => $data['precioCompraUnidad'],
       'precioVentaUnidad' => $data['precioVentaUnidad'],       
       'fecha' => $data['fecha'],
       'imagen' => $data['imagen'],
       
     ));

         
   }


     public static function destroyProducto($codigoProducto)
      {


        $producto = producto::find($codigoProducto);
        $producto->delete();

      }
 


}
