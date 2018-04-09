<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Redirect;
use DB;


class usuario extends Model
{
    
protected $table = 'usuario';
protected $primaryKey='cedula';



  /**
    * Registra un libro en la base de datos
    * @param trae los datos necesarios para crear un registro de la bd.
    * 
    */
   public static function crearUsuario($data)
   {

   	$nombreCompleto=$data['nombres'].$data['apellidos'];

   	 DB::table('usuario')->insert(array(
       'nombreCompleto' => $nombreCompleto ,
       'email' => $data['email'],
       'telefono' => $data['telefono'],
       'cedula' => $data['cedula'],
       'direccion' => $data['direccion'],
       'rol' => $data['rol'],
       'contrasena' => $data['contrasena'],
       'imagen' => $data['foto']               		           
     ));

   }


     public static function destroyUsuario($idcedula)
      {


        $usuario = usuario::find($idcedula);
        $usuario->delete();

      }
 



}
