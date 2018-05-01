<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVentas extends Model
{

    protected $table = 'detalleventas';


    protected $fillable=[

        'cantidadProductos','costoTotalVenta', 'fechaVenta',
    ];



      public function Ventas()
      {
        return $this->hashMany('App\Ventas');
      }

       public function Productos()
      {
        return $this->hashMany('App\Productos');
      }

     


}
