<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use DateTime;

class userstorneos extends Model
{

    protected $table = 'userstorneos';
    protected $primaryKey='idTorneo';


    protected $fillable=[
       'torneos_idtorneo','users_id',
    ];



/*
      DB::table('torneos')->insert(array(
       'titulo' => $data['titulo'],
       'cantidadJugadores' => $data['cantidadJugadores'],
       'fechaInicio' => $date->format('Y-m-d'),       
       'descripcion' => $data['descripcion'],
       'premio' => $data['premio']
      ));  
*/

    






}