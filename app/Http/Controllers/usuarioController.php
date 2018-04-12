<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use Redirect;
use DB;



class usuarioController extends Controller
{
    


 public function index()
        {
            
          $personas=DB::table('clientes')
              ->join('users', 'users.idUsuario', '=', 'clientes.Usuario_idUsuario')
              ->select('clientes.nombreCompleto','clientes.cedula','clientes.direccion','clientes.telefono', 'clientes.rol', 'clientes.tipoDocumento','users.usarname','users.email', 'users.password')->get();
               
          return view('/CLIENTE/listar_Personas',['personas' => $personas]);
        
        }



    /**
     *  Registra un usuario
     * @param trae los datos necesarios para crear un registro de la bd.
     * @return vista del registro de usuarios
     */
        public function create( Request $request)
        {
            
          //obtenemos el campo file definido en el formulario

          // $file = $request->file('foto');
     
           /**obtenemos el nombre del archivo
              * $nombre = $file->getClientOriginalName();
              * $extension = $file->getClientOriginalExtension();
              */

            
          $dataclientes= array(
              'nombres' => $request->nombre,
              'apellidos' => $request->apellido,
              'cedulaEntrante' => $request->numerocedula,
              'direccion' => $request->direccion,
              'telefono' => $request->telefono,
              'rol' => $request->rol,
              'tipoDocumento' => $request->tipoDocumento,
              'username' => $request->username,
              'email' => $request->email,
              'password' => $request->password
              //'foto' => './storage/'.$nombre
          );
          
          cliente::crearcliente($dataclientes);

            
        //indicamos que queremos guardar un nuevo archivo en el public
        //Storage::disk('public')->put($nombre,  \File::get($file));

        //return Redirect::to('CLIENTE/crear_cliente')->with('success','Registro Exitoso');

        return \View('/CLIENTE/crear_cliente')
        ->with('success','Registro Exitoso');
              

      }

      public function destroy($idCedula){
          cliente::destroycliente($idCedula);
          return redirect('/listar_Personas');
      }
}
