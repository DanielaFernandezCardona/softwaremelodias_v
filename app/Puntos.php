<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puntos extends Model
{

    protected $table = 'puntos';


    protected $fillable=[

        'puntos','rango','descripcion',
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