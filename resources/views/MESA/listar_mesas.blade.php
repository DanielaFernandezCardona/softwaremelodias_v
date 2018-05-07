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
       <th data-field="fecha" style="text-align: center;" data-align="right" >Número</th>
       <th data-field="cantidadJugadores" style="text-align: center;">Tipo</th>
       <th data-field="Premio" style="text-align: center;"> Valor x 5 minutos</th>
      
     </tr>
   </thead>
 
  </table>


  </div>
@endsection 