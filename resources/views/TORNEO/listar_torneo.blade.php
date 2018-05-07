<!--agrego codigo del formulario dentro de las etiquetas body -->
@extends('layout.panel')
@section('title', 'Lista torneos')

@Section('contenido')
<div class="container" style="width:400px; "> 
    <div class="row">
      <div  style="width:800px; " >
        <h1 class="page-header" style="color:BLACK;text-align: center;">LISTADO DE TORNEOS</h1>
      </div>
    </div>


    <table class="table table-hover" style="background-color:white;color:black; " >
     <thead>
      <tr>
       <th data-field="fecha" style="text-align: center;" data-align="right" >Fecha</th>
       <th data-field="cantidadJugadores" style="text-align: center;">Cantidad Jugadores</th>
       <th data-field="Premio" style="text-align: center;"> Premio</th>
       <th data-field="descripcion" style="text-align: center;"> Descripción</th>
       <th data-field="Participantes" style="text-align: center;"> Participantes</th>
      
     </tr>
   </thead>
 
  </table>


  </div>
@endsection 