<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premios extends Model
{

    protected $table = 'premios';


    protected $fillable=[

        'descripcion', 'nombre', 'tipo',
    ];



      public function Torneos()
      {
        return $this->belongsTo('App\Torneos');
      }



}
