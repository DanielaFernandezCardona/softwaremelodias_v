<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Redirect;
use DB;
use App\User;


class cliente extends Model
{
    
protected $table = 'ventas';
protected $primaryKey='codigoVenta';


  /**
    * Registra un cliente en la base de datos
    * @param trae los datos necesarios para crear un registro de la bd.
    * 
    */
   public static function crearVenta($data)
   {

        }


 
      public static function updateVentas($cliente){

        
      }
 



}
