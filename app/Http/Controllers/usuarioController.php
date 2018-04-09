<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use Redirect;
use DB;



class usuarioController extends Controller
{
    


 public function index()
        {
            
             $personas=DB::table('usuario')
                ->select('nombreCompleto','cedula','email','direccion','telefono', 'rol', 'contrasena','imagen')
                ->get();

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
           $file = $request->file('foto');
     
           //obtenemos el nombre del archivo
           $nombre = $file->getClientOriginalName();
           $extension = $file->getClientOriginalExtension();


            
            $datausuarios= array(
                'nombres' => $request->nombre,
                'apellidos' => $request->apellido,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'cedula' => $request->cedula,
                'direccion' => $request->direccion,
                'rol' => $request->rol,
                'contrasena' => $request->contrasena,
                'foto' => './storage/'.$nombre
                                );
                usuario::crearUsuario($datausuarios);

            
        //indicamos que queremos guardar un nuevo archivo en el public
       \Storage::disk('public')->put($nombre,  \File::get($file));

  //    return Redirect::to('CLIENTE/crear_cliente')->with('success','Registro Exitoso');

       return \View('/CLIENTE/crear_cliente')
                ->with('success','Registro Exitoso');
              

        }


        public function destroy($idCedula)
    {
      usuario::destroyUsuario($idCedula);
      return redirect('/listar_Personas');
    }
}
