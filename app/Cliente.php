<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Redirect;
use DB;


class cliente extends Model
{
    
protected $table = 'clientes';
protected $primaryKey='cedula';



  /**
    * Registra un cliente en la base de datos
    * @param trae los datos necesarios para crear un registro de la bd.
    * 
    */
   public static function crearCliente($data)
   {

   	$nombreCompleto=$data['nombres'].$data['apellidos'];

   	 DB::table('clientes')->insert(array(
       'nombreCompleto' => $nombreCompleto ,
       'cedula' => $data['cedula'],
       'direccion' => $data['direccion'],
       'telefono' => $data['telefono'],
       'rol' => $data['rol'],       
       'tipoDocumento' => $data['tipoDocumento'],
       'Usuario_idUsuario' => $data['idUsuario'],
       
     ));

      DB::table('users')->insert(array(
       'username' => $data['username'],
       'email' => $data['email'],       
       'password' => $data['password']  ,

      ));  
     
   }


     public static function destroyCliente($idcedula)
      {


        $cliente = Cliente::find($idcedula);
        $cliente->delete();

      }
 



}
