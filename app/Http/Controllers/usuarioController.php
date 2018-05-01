<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use Redirect;
use DB;
use Auth;


class usuarioController extends Controller
{



 public function index()
        {

          $personas=DB::table('clientes')
              ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
              ->select('clientes.nombreCompleto','clientes.cedula','clientes.direccion','clientes.telefono', 'clientes.rol', 'clientes.tipoDocumento','users.username','users.email', 'users.password')->get();

          return view('/CLIENTE/listar_Personas',['personas' => $personas]);

        }



        public function index2(){


            // Obtiene el objeto del Usuario Autenticado
            $person = Auth::user();

              $persona=DB::table('clientes')
              ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
              ->select('clientes.nombreCompleto','clientes.cedula','clientes.direccion','clientes.telefono', 'clientes.rol', 'clientes.tipoDocumento','clientes.cedula','users.username','users.email', 'users.password','users.id')
              ->Where('clientes.users_idUsuario',"=",$person->id)
              ->first();

              //var_dump($persona->email);


          return view('/CLIENTE/misdatos',['persona' => $persona]);


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
              'cedulaEntrante' => $request->cedula,
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


   public function updateCliente(Request $request){

     cliente::updateCliente($request);

$persona=DB::table('clientes')
              ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
              ->select('clientes.nombreCompleto','clientes.cedula','clientes.direccion','clientes.telefono', 'clientes.rol', 'clientes.tipoDocumento','clientes.cedula','users.username','users.email', 'users.password','users.id')
              ->Where('clientes.users_idUsuario',"=",$request->id)
              ->first();


      //return redirect('/mis_datos');

return redirect()->route('CLIENTE.misdatos',['persona' => $persona])
       ->with('success','modificados');

// return \View('/CLIENTE/misdatos')
//        ->withSuccess('Datos modificados correctamente')
  //      ->with();

   }



        public function search(Request $request){

           $searchTerm = $request->nombreCliente;


            $persona=DB::table('clientes')
              ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
              ->select('clientes.nombreCompleto','users.id')
              ->Where('clientes.nombreCompleto','LIKE', '%' . $searchTerm . '%')
              ->first();

          if(!empty($persona)){
               $p['nombreCompleto']=$persona->nombreCompleto;
              return view('/VENTA/venta',['persona' => $p]);

          }
            else{
               $persona['nombreCompleto']="Cliente no encontrado";
              return view('/VENTA/venta',['persona' => $persona]);

            }


}

}
