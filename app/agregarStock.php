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
   public static function agregarStock($data)
   {

   	//$nombreCompleto=$data['nombres'].$data['apellidos'];

   	 DB::table('productos')->insert(array(
       'unidades' => $data['unidades']
       
     ));   
   }


}
