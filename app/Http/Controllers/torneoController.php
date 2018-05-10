<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Torneos;
use App\torneo;
use Redirect;
use DB;
use Auth;


class TorneoController extends Controller
{


public function index()
        {

          $torneos=DB::table('torneos')
              ->select('titulo','cantidadJugadores','fechaInicio','premio','idTorneo')
              ->get();

          return view('/TORNEO/listar_torneo',['torneos' => $torneos]);

        }



       public function create( Request $request)
        {
            
           
            $datatorneo= array(
                'titulo' => $request->titulo,
                'cantidadJugadores' => $request->cantidadJugadores,
                'fechaInicio' => $request->fechaInicio,
                'descripcion' => $request->descripcion,
                'premio' => $request->premio
            );
            
   		torneo::creartorneo($datatorneo);

      return redirect('crear_torneo')->with('success', 'Registro exitoso de un torneo ');

        }



        public function destroy($codigotorneo){
        
       $torneo = torneos::find($codigotorneo);
        $torneo->delete();
        return redirect('listar_torneo');
        
      }


      public function createParticipante($codigotorneo){
        
         $person = Auth::user();

        $torneobd=torneos::find($codigotorneo);
        $torneobd ->idUser = $person->id;
       $torneobd->save();
          return redirect('listar_torneo');
  


      }





}