<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Redirect;
use DB;


class mesa extends Model
{
    
protected $table = 'mesas';
protected $primaryKey='codigoMesa';


 
    public static function crearMesa($data)
   {

     DB::table('mesas')->insert(array(
       'numeroMesa' => $data['numeroMesa'],
       'tipoMesa' => $data['tipoMesa'],
       'valor5Minutos' => $data['valor5Minutos']
     ));   
   }




     public static function destroyMesas($idcedula)
      {
        $mesa = mesa::find($codigoMesa);
        $mesa->delete();
      }




      public static function updateMesas($cliente){

       
      }
 



}
