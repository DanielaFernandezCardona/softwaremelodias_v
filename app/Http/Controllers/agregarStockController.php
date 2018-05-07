<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agregarStock;
use Redirect;
use DB;


class agregarStockController extends Controller
{
    //

  
     public function index()
        {
        $articles="";
        $searchTerm="";
        
               //  return view('VENTA/agregar_stock',['articles' => $productos]);

                 return view('PRODUCTO.agregar_stock', compact('articles', 'searchTerm')); 

        }
  

      /**
         *  Registra un producto
         * @param trae los datos necesarios para crear un registro de la bd.
         * @return vista del registro de productos
         */
        public function add( Request $request)
        {
            
                  
            $dataproductos= array(
                'unidades' => $request->unidades
              );
            
           producto::agregarStock($dataproductos);
            //var_dump($request);

       return \View('/VENTA/agregar_Stock')
                ->with('success','Registro Exitoso');
              

        }

        public function search(Request $request){

           $searchTerm = $request->formData['nombreProducto'];
                 $articles = DB::table('productos')
                 ->select('codigoProducto','nombreProducto')
                 ->where('nombreProducto', 'LIKE', '%' . $searchTerm . '%')
                 ->first();
      


   
   $myJSON = (array) json_encode($articles);
var_dump($myJSON);

}
        
          
}
