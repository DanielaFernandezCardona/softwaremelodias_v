<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mesa;
use Redirect;
use DB;   
use Carbon\Carbon;
use DateTime;
use Auth;


class mesaController extends Controller
{
public $timestamps = false;

   public function index()
 {
   $mesas=DB::table('mesas')
   ->select('codigoMesa','numeroMesa','tipoMesa','valor5Minutos')
   ->get();

$person = Auth::user();

  $persona=DB::table('clientes')
  ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
  ->select('clientes.rol')
  ->Where('clientes.users_idUsuario',"=",$person->id)
  ->first();

    if($persona->rol=='administrador')
   return view('/MESA/listar_mesas',['mesas' => $mesas]);

    if($persona->rol=='empleado')
   return view('/MESA/listar_mesas',['mesas' => $mesas]);

   if($persona->rol=='cliente')
    return view('bienvenido'); 


 }

 public function create( Request $request)
 {
            //$data = new \DateTime();
            //date_format:H:i;
            //Carbon::now();
            //$mytime = Carbon\Carbon::now();
            //echo $mytime->toDateTimeString();

$now = new DateTime($request->tiempoInicio);

  $datamesas= array(
    'numeroMesa' => $request->numeroMesa,
    'tipoMesa' => $request->tipoMesa,
    'valor5Minutos' => $request->valor5Minutos,
    'tiempoInicio' => $now
  );


  mesa::crearMesa($datamesas);



    return redirect('mesa')->with('success', 'Registro exitoso de la mesa');
//  return \View('/MESA/mesa')
 //      ->with('success','Registro Exitoso');

}


public function destroy($codigoMesa){
  mesa::destroyMesas($codigoMesa);
  return redirect('/listar_mesas');
}

public function editMesa($codigoMesa){
$mesa=mesa::editMesa($codigoMesa);

return view('MESA/updatemesa',['mesa' => $mesa]);

//return redirect('/listado_mesas');
}

public function editPrestamo($idPrestamo){
    prestamo::editPrestamo($idPrestamo);
    return redirect('/listadoPrestamos'); 
   }



public function reserva_mesa(Request $data){

 $mesa=DB::table('mesas')
  ->select('codigoMesa')
  ->Where('numeroMesa',"=",$data->numeroMesa)
  ->first();

 $conteoMesa=   DB::table('mesas')->where('numeroMesa',"=",$data->numeroMesa)->count();
 $conteoCliente= DB::table('clientes')->where('cedula',"=",$data->numeroDocumento)->count();


  if($conteoMesa==1 && $conteoCliente){

$now = new DateTime($data->fecha);
   DB::table('reservas')->insert(array(
       'fechaReserva' => $now,
       'mesas_codigoMesa' => $mesa->codigoMesa,
       'clientes_cedula' => $data->numeroDocumento
     ));   
      return redirect('reserva_mesa')->with('success', 'Registro Exitoso de la Reserva');

  }else{
        return redirect('reserva_mesa')->with('success', 'No se puede realizar la reserva vericar el numero de mesa y el numero del documento');
   
  }





}


public function listar_reservas(){

 $mesas=DB::table('reservas')
  ->join('mesas', 'mesas.codigoMesa', '=', 'reservas.mesas_codigoMesa')
  ->select('mesas.tipoMesa','reservas.fechaReserva','mesas.numeroMesa','mesas.codigoMesa')
  ->get();

$person = Auth::user();

  $persona=DB::table('clientes')
  ->join('users', 'users.id', '=', 'clientes.users_idUsuario')
  ->select('clientes.rol')
  ->Where('clientes.users_idUsuario',"=",$person->id)
  ->first();

    if($persona->rol=='administrador')
    return view('/CITAS/listar_reservas',['mesas' => $mesas]);
  
    if($persona->rol=='empleado')
      return view('/CITAS/listar_reservas',['mesas' => $mesas]);

   if($persona->rol=='cliente')
    return view('bienvenido'); 




}






public function updateMesa( Request $request){



$mesabd=mesa::find($request->id);

//var_dump($mesabd);


$now = new DateTime($request->tiempoInicio);


        $mesabd ->numeroMesa = $request ->numeroMesa;
        $mesabd ->tipoMesa = $request ->tipoMesa;
        $mesabd ->valor5Minutos = $request ->valor5Minutos;
        $mesabd ->tiempoInicio = $now;
         $mesabd->save();


        
 return redirect('listar_mesas');

}



}