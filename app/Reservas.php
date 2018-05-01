<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{

    protected $table = 'reservas';


    protected $fillable=[

        'fechaReserva',
    ];



      public function Mesas()
      {
        return $this->hashMany('App\Mesas');
      }

       public function Clientes()
      {
        return $this->hashMany('App\Clientes');
      }


}
