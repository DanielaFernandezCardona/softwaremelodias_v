<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{

    protected $table = 'clientes';


    protected $fillable=[

        'cedula','nombreCompleto', 'direccion', 'telefono', 'rol', 'tipoDocumento',
    ];



      public function Users()
      {
        return $this->hasOne('App\Users');
      }

       public function Participacion()
      {
        return $this->belongsTo('App\Participacion');
      }

       public function Puntos()
      {
        return $this->belongsTo('App\Puntos');
      }

       public function Reservas()
      {
        return $this->belongsTo('App\Reservas');
      }


}