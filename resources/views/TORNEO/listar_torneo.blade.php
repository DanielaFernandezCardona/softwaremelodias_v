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
       <th data-field="fecha" style="text-align: center;" data-align="right" >Fecha Inicio</th>
       <th data-field="fecha" style="text-align: center;" data-align="right" >Fecha Fin</th>     
       <th data-field="cantidadJugadores" style="text-align: center;">Cantidad Jugadores</th>
       <th data-field="Premio" style="text-align: center;"> Premio</th>
       <th data-field="Participantes" style="text-align: center;"> Participantes</th>
      
     </tr>
   </thead>

    <tbody>
     <tr>
      @foreach($torneos as $torneo)
      <td>{{$torneo->fechaInicio}}</td>
      <td>{{$torneo->fechaFin}}</td>
      <td>{{$torneo->cantidadJugadores}}</td>
      <td>{{$torneo->premio}}</td>
      <td>
       <a class="btn btn-success btn-xs" href="{{ route('torneoParticipante/registrar',['idAdmin' =>  Auth::user()->id] )}}" onclick="return confirm('¿Seguro desea eliminarlo?')" >Registrar</a>
     </td>   
      <td>
       <a class="btn btn-danger btn-xs" href="{{ route('torneoParticipante/destroy',['idTorneo' =>$torneo->idTorneo] )}}" onclick="return confirm('¿Seguro desea eliminarlo?')" >Eliminar</a>
     </td>   


     </tr>
   @endforeach
 
  </table>


  </div>
@endsection 