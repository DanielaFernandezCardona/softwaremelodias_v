<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{

    protected $table = 'torneos';
    protected $primaryKey='idTorneo';


    protected $fillable=[

       'titulo','cantidadJugadores', 'fechaInicio', 'fechaFin', 'descripcion',
    ];



      public function Premios()
      {
        return $this->hashMany('App\Premios');
      }


      public function Participacion()
      {
        return $this->belongsTo('App\Participacion');
      }





  /**
    * Registra un cliente en la base de datos
    * @param trae los datos necesarios para crear un registro de la bd.
    * 
    */
   public static function creartorneo($data)
   {

   
      DB::table('users')->insert(array(
       'titulo' => $data['titulo'],
       'cantidadJugadores' => $data['cantidadJugadores'],
       'fechaInicio' => $data['fechaInicio'],       
       'fechaFin' => $data['fechaFin'],
       'descripcion' => $data['descripcion'],
       'premio' => $data['premio']
      ));  

      

 }



}