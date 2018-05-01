<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesas extends Model
{

    protected $table = 'mesas';


    protected $fillable=[

        'numeroMesa', 'tipoMesa', 'valor5Minutos', 'tiempoInicio', 'cantidadPersonas',
    ];



      public function Puntos()
      {
        return $this->belongsTo('App\Puntos');
      }


  	  public function Ventas()
      {
        return $this->belongsTo('App\Ventas');
      }


 	  public function Reservas()
      {
        return $this->belongsTo('App\Reservas');
      }



}