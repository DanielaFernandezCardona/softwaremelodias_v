<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use DateTime;

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
  
   //$date = new \DateTime($data['fechaInicio']);

$date = new DateTime($data['fechaInicio']);
   
      DB::table('torneos')->insert(array(
       'titulo' => $data['titulo'],
       'cantidadJugadores' => $data['cantidadJugadores'],
       'fechaInicio' => $date->format('Y-m-d'),       
       'descripcion' => $data['descripcion'],
       'premio' => $data['premio']
      ));  

      

 }

 public static function destroyTorneo($idcedula)
      {
        $cliente = torneos::find($idcedula);
        $cliente->delete();

      }



}