<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Redirect;
use DB;
use App\User;


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
       'idUsuario' => intval($data['cedulaEntrante']),
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
       'users_idUsuario' => intval($data['cedulaEntrante'])

     ));
   }


     public static function destroyCliente($idcedula)
      {


        $cliente = Cliente::find($idcedula);
        $cliente->delete();

      }

      public static function updateCliente($cliente){

        $clientebd=cliente::find($cliente->id);
        $clientebd ->cedula = $cliente ->cedula;
        $clientebd ->nombreCompleto = $cliente ->nombreCompleto;
        $clientebd ->direccion = $cliente ->direccion;
        $clientebd ->telefono = $cliente ->telefono;
        $clientebd ->rol = $cliente ->rol;
        $clientebd ->tipoDocumento = $cliente ->tipoDocumento;


        $userbd=User::find($cliente->id);
        $userbd ->username = $cliente ->username;
        $userbd ->email = $cliente ->email;
        $userbd ->password = $cliente ->password;

         $clientebd->save();
         $userbd->save();
      }

      public function users_idUsuario()
      {
        //cuando se quiera acceder al usuario de un determinado clientes se debe utilizar
        //el siguiente codigo.
        //$usuario = Cliente::find(1)->user;
        return $this->hasOne('App\User');
      }



}
