<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{

    protected $table = 'ventas';


    protected $fillable=[

        'concepto','estado', 'tiempoFinal',
    ];



      public function Mesas()
      {
        return $this->hashMany('App\Mesas');
      }

       public function DetalleVentas()
      {
        return $this->belongsTo('App\DetalleVentas');
      }


}
