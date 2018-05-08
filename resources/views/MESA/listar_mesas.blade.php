<!--agrego codigo del formulario dentro de las etiquetas body -->
@extends('layout.panel')
@section('title', 'Lista mesas')

@Section('contenido')
<div class="container" style="width:400px; "> 
    <div class="row">
      <div  style="width:800px; " >
        <h1 class="page-header" style="color:BLACK;text-align: center;">LISTADO DE MESAS</h1>
      </div>
    </div>


    <table class="table table-hover" style="background-color:white;color:black; " >
     <thead>
      <tr>
       <th data-field="codigoMesa" style="text-align: center;" data-align="right" >Código Mesa</th>
       <th data-field="numeroMesa" style="text-align: center;" data-align="right" >Número Mesa</th>
       <th data-field="tipoMesa" style="text-align: center;">Tipo Mesa</th>
       <th data-field="Valor5Minutos" style="text-align: center;"> Valor 5 minutos</th>
      
     </tr>
   </thead>
    
    <tbody>
     <tr>
      @foreach($mesas as $mesa)
      <td>{{$mesa->codigoMesa}}</td>
      <td>{{$mesa->numeroMesa}}</td>
      <td>{{$mesa->tipoMesa}}</td>
      <td>{{$mesa->Valor5Minutos}}</td>
      <td>
       <a class="btn btn-danger btn-xs" href="{{ route('mesa/destroy',['codigoMesa' =>$mesa->codigoMesa] )}}" onclick="return confirm('¿Seguro desea eliminarlo?')" >Eliminar</a>
     </td>  
     </tr>
     @endforeach
    </tbody>
  </table>


  </div>
@endsection 