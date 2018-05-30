<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Redirect;
use DB;


class mesa extends Model
{
    
protected $table = 'mesas';
protected $primaryKey='codigoMesa';
public $timestamps = false;

 
    public static function crearMesa($data)
   {
    

     DB::table('mesas')->insert(array(
       'numeroMesa' => $data['numeroMesa'],
       'tipoMesa' => $data['tipoMesa'],
       'valor5Minutos' => $data['valor5Minutos'],
       'tiempoInicio' => $data['tiempoInicio']
     ));   

     
   }



   public static function editMesa($codigoMesa){
    $mesa = mesa::find($codigoMesa);
     return $mesa;

   }

 

     public static function destroyMesas($codigoMesa)
      {
        $mesa = mesa::find($codigoMesa);
        $mesa->delete();
      }




      public static function updateMesas($cliente){

       
      }
 



}
