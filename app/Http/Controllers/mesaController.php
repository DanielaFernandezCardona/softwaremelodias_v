<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mesa;
use Redirect;
use DB;


class mesaController extends Controller
{


       public function create( Request $request)
        {
            
           
            $datamesas= array(
                'numeroMesa' => $request->numeroMesa,
                'tipoMesa' => $request->tipoMesa,
                'valor5Minutos' => $request->valor5Minutos,
            );
            
   		mesa::crearmesa($datamesas);

        }



          public function destroy($codigoMesa){
          cliente::destroycliente($codigoMesa);
          return redirect('/listar_Personas');
      }



}