<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Redirect;
use DB;
use App\User;


class mesa extends Model
{
    
protected $table = 'mesas';
protected $primaryKey='codigoMesa';


  /**
    * Registra un cliente en la base de datos
    * @param trae los datos necesarios para crear un registro de la bd.
    * 
    */
   public static function crearMesas($data)
   {

   }


     public static function destroyMesas($idcedula)
      {


        $cliente = Cliente::find($idcedula);
        $cliente->delete();

      }

      public static function updateMesas($cliente){

       
      }
 



}
