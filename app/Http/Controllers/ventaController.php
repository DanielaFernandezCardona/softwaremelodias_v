<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ventaController extends Controller
{
    
public function index()
        {
            $persona['nombreCompleto']='';

          return view('/VENTA/venta',['persona' => $persona]);
        
        }
 


}
