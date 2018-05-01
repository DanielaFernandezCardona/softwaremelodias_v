<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participacion extends Model
{

    protected $table = 'participacion';


    protected $fillable=[

        'puestoLogrado', 'fechaInicio', 'fechaFin',
    ];



      public function Clientes()
      {
        return $this->hashMany('App\Clientes');
      }


 		public function Torneos()
      {
        return $this->hashMany('App\Torneos');
      }

}