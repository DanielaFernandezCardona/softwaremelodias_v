<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{

    protected $table = 'productos';


    protected $fillable=[

        'nombreProducto','descripcion', 'unidades','preciocompra', 'precioventa', 'imagen',
    ];



        public function DetalleVentas()
      {
        return $this->belongsTo('App\DetalleVentas');
      }


}
