<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mesa;
use Redirect;
use DB;   
use Carbon\Carbon;


class mesaController extends Controller
{


   public function index()
 {
   $mesas=DB::table('mesas')
   ->select('codigoMesa','numeroMesa','tipoMesa')
   ->get();

   return view('/MESA/listar_mesas',['mesas' => $mesas]);

 }

 public function create( Request $request)
 {
            //$data = new \DateTime();
            //date_format:H:i;
            //Carbon::now();
            //$mytime = Carbon\Carbon::now();
            //echo $mytime->toDateTimeString();

  $datamesas= array(
    'numeroMesa' => $request->numeroMesa,
    'tipoMesa' => $request->tipoMesa,
    'valor5Minutos' => $request->valor5Minutos,
    'tiempoInicio' => $request ->tiempoInicio

  );


  mesa::crearMesa($datamesas);

  return \View('/MESA/mesa')
       ->with('success','Registro Exitoso');

}


public function destroy($codigoMesa){
  cliente::destroyMesas($codigoMesa);
  return redirect('/listar_Personas');
}



}