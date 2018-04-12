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

      $users = DB::table('users')->count();
      $contador = $users + 1;
   
   	  DB::table('users')->insert(array(
        'idUsuario' => $contador,
       'username' => $data['username'],
       'email' => $data['email'],       
       'password' => $data['password']

      ));  


      $contador = $contador++;
      //$usuario = DB::table('users')->select('idUsuario')->where('email', '=', $data['email'])->get();
      //$id = DB:: select idUsuario from users where(users.email = email);
      
      $nombreCompleto=$data['nombres']." ".$data['apellidos'];

     DB::table('clientes')->insert(array(
       'nombreCompleto' => $nombreCompleto,
       'cedula' => intval($data['cedulaEntrante']),
       'direccion' => $data['direccion'],
       'telefono' => $data['telefono'],
       'rol' => $data['rol'],       
       'tipoDocumento' => $data['tipoDocumento'],
       'Usuario_idUsuario' => $contador
       
     ));
   }


     public static function destroyCliente($idcedula)
      {


        $cliente = Cliente::find($idcedula);
        $cliente->delete();

      }
 



}
