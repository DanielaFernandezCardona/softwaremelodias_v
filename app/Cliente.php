<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Redirect;
use DB;


class Cliente extends Model
{
    
protected $table = 'clientes';
protected $primaryKey='cedula';



  /**
    * Registra un libro en la base de datos
    * @param trae los datos necesarios para crear un registro de la bd.
    * 
    */
   public static function crearCliente($data)
   {

   	$nombreCompleto=$data['nombres'].$data['apellidos'];

   	 DB::table('clientes')->insert(array(
       'nombreCompleto' => $nombreCompleto ,
       'telefono' => $data['telefono'],
       'cedula' => $data['cedula'],
       'direccion' => $data['direccion'],
       'tipoDocumento' => $data['tipoDocumento'],
       'rol' => $data['rol']
     ));

   }


     public static function destroyCliente($idcedula)
      {


        $cliente = Cliente::find($idcedula);
        $cliente->delete();

      }
 



}
