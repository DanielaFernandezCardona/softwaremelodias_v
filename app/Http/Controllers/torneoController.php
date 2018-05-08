<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\torneo;
use Redirect;
use DB;


class TorneoController extends Controller
{


public function index()
        {

          $torneos=DB::table('torneos')
              ->select('titulo','cantidadJugadores','fechaInicio','fechaFin','premio','idTorneo')
              ->get();

          return view('/TORNEO/listar_torneo',['torneos' => $torneos]);

        }



       public function create( Request $request)
        {
            
           
            $datatorneo= array(
                'titulo' => $request->titulo,
                'cantidadJugadores' => $request->cantidadJugadores,
                'fechaInicio' => $request->fechaInicio,
                'fechaFin' => $request->fechaFin,
                'descripcion' => $request->descripcion,
                'premio' => $request->premio
            );
            
   		torneo::creartorneo($datamesas);

      return redirect('crear_torneo')->with('success', 'Registro exitoso de un torneo ');

        }



          public function destroy($codigotorneo){
         $torneo = torneo::find($codigotorneo);
        $torneo->delete();
        return redirect('listar_torneo');
      }


      public function createParticipante(){

      }





}