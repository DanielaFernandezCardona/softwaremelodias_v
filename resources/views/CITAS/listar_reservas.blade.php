<!--agrego codigo del formulario dentro de las etiquetas body -->
@extends('layout.panel')
@section('title', 'Lista mesas')

@Section('contenido')
<div class="container" style="width:400px; "> 
    <div class="row">
      <div  style="width:800px; " >
        <h1 class="page-header" style="color:BLACK;text-align: center;">LISTADO DE RESERVAS</h1>
      </div>
    </div>


    <table class="table table-hover" style="background-color:white;color:black;text-align:center; " >
     <thead>
      <tr>
       <th data-field="codigoMesa" style="text-align: center;" data-align="right" >Numero Mesa</th>
       <th data-field="numeroMesa" style="text-align: center;" data-align="right" >Fecha  Reserva</th>
       <th data-field="tipoMesa" style="text-align: center;">Tipo Mesa</th>
      
     </tr>
   </thead>
    
    <tbody>
     <tr>
      @foreach($mesas as $mesa)
      <td>{{$mesa->numeroMesa}}</td>
      <td>{{$mesa->fechaReserva}}</td>
      <td>{{$mesa->tipoMesa}}</td>
    <!--
      <td>
       <a class="btn btn-danger btn-xs" href="{{ route('mesa/destroy',['codigoMesa' =>$mesa->codigoMesa] )}}" onclick="return confirm('¿Seguro desea eliminarlo?')" >Eliminar</a>
     </td>
       <td>
       <a class="btn btn-success btn-xs" href="{{ route('mesa/edit',['codigoMesa' =>$mesa->codigoMesa] )}}"  >Editar</a>
     </td>   
  -->
     </tr>
     @endforeach
    </tbody>
  </table>


  </div>
@endsection 