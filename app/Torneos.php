<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneos extends Model
{

    protected $table = 'torneos';
    protected $primaryKey='idtorneo';



    protected $fillable=[

        'cantidadJugadores', 'fechaInicio', 'fechaFin', 'descripcion',
    ];



      public function Premios()
      {
        return $this->hashMany('App\Premios');
      }


      public function Participacion()
      {
        return $this->belongsTo('App\Participacion');
      }



}