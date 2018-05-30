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


$person = Auth::user();

  $persona=DB::table('clientes')
  ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
  ->select('clientes.rol')
  ->Where('clientes.users_idUsuario',"=",$person->id)
  ->first();

    if($persona->rol=='administrador')
  return view('/CLIENTE/listar_Personas',['personas' => $personas]);
  
    if($persona->rol=='empleado')
     return view('bienvenido'); 
   
   if($persona->rol=='cliente')
    return view('bienvenido'); 




}



public function index2(){


            // Obtiene el objeto del Usuario Autenticado
  $person = Auth::user();

  $persona=DB::table('clientes')
  ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
  ->select('clientes.nombreCompleto','clientes.cedula','clientes.direccion','clientes.telefono', 'clientes.rol', 'clientes.tipoDocumento','clientes.cedula','users.username','users.email', 'users.password','users.id')
  ->Where('clientes.cedula',"=",$person->id)
  ->first();

           

 if($persona->rol=='administrador'||$persona->rol=='empleado'){
return view('/CLIENTE/misdatos',['persona' => $persona]);
 }else{
  return view('/CLIENTE/misdatosCliente',['persona' => $persona]);

 }

  


}



    /**
     *  Registra un usuario
     * @param trae los datos necesarios para crear un registro de la bd.
     * @return vista del registro de usuarios
     */
    public function create( Request $request)
    {

         
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



           if($dataclientes['rol']=='cliente'){
            cliente::crearcliente($dataclientes);


            return redirect('crear_cliente')->with('success', 'Cliente registrado con éxito');
          }else{

            if($dataclientes['rol']=='cliente'){

              return redirect('crear_cliente')->with('success', 'No se pudo registrar el cliente ');
            }

          }


          $admin=   DB::table('clientes')->where('rol','administrador')->count();

          if($admin<2&& $dataclientes['rol']=='administrador'){

           cliente::crearcliente($dataclientes);

           return redirect('crear_cliente')->with('success', 'Administrador registrado con éxito');

         } else{

          if($dataclientes['rol']=='administrador'){

            return redirect('crear_cliente')->with('success', 'No se puede registrar más de 2 administradores ');
          }

        }

        $empleado=DB::table('clientes')->where('rol','empleado')->count();


        if($empleado<1 && $dataclientes['rol']=='empleado'){

         cliente::crearcliente($dataclientes);

         return redirect('crear_cliente')->with('success', 'Empleado registrado con éxito');

       }else{

        if($dataclientes['rol']=='empleado'){

          return redirect('crear_cliente')->with('success', 'No se puede registrar más de un empleado ');
        }

      }



    }



    public function create1( Request $request)
    {

     
           $data= array(
            'nombres' => $request->nombre,
            'apellidos' => $request->apellido,
            'cedulaEntrante' => $request->cedula,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'rol' => "cliente",
            'tipoDocumento' => $request->tipoDocumento,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
              //'foto' => './storage/'.$nombre
          );

           //cliente::crearCliente($dataclientes);

     
      DB::table('users')->insert(array(
       'id' => intval($data['cedulaEntrante']),
       'username' => $data['username'],
       'email' => $data['email'],
       'password' => \Hash::make ($data['password'])

      ));





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




           return \View('listarproducto')
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
         ->Where('clientes.cedula',"=",$request->id)
         ->first();



         return redirect()->route('datos',['persona' => $persona])
         ->with('success','modificados');
           

       }



       public function search(Request $request){

     
          $searchTerm= $request->nombreCliente;
                        
         $persona=DB::table('clientes')
         ->select('nombreCompleto','cedula','rol')
         ->Where('clientes.nombreCompleto','LIKE', '%'.$searchTerm.'%')
         ->first();
           
                   
         if(!empty($persona)&&$persona->rol=='cliente'){
           $array = json_decode(json_encode($persona), True);
            var_dump($array);
         }
         else{
                echo "no se encontro la persona";
         }
         


       }//salir

     }
