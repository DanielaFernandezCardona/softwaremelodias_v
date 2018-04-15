@extends('layout.panel')
@section('title', 'Listado Personas')

@Section('contenido')


<!--agrego codigo del formulario dentro de las etiquetas body -->

<div class="container" style="width:400px; "> 
    <div class="row">
      <div  style="width:800px; " >
        <h1 class="page-header" style="color:BLACK;text-align: center;">LISTADO DE PERSONAS</h1>
      </div>
    </div><!--/.row-->


    <table class="table table-hover" style="background-color:white;color:black; " >
     <thead>
      <tr>
       <th data-field="nombreCompleto" data-align="right">nombreCompleto</th>
       <th data-field="cedula">Cédula</th>
       <th data-field="direccion"> Direccion</th>
       <th data-field="telefono">Telefono</th>
       <th data-field="rol"> rol</th>
       <th data-field="tipoDocumento"> Tipo Documento</th>
       <th data-field="username"> Username</th>
       <th data-field="email">Email</th>
       <th data-field="password">Contrasena</th>
       <!--<th data-field="foto"> foto</th>-->
     </tr>
   </thead>
   <tbody>
     <tr>
      @foreach($personas as $persona)
      <td>{{$persona->nombreCompleto}}</td>
      <td>{{$persona->cedula}}</td>
      <td>{{$persona->direccion}}</td>
      <td>{{$persona->telefono}}</td>
      <td style="text-align: center;">{{$persona->rol}}</td>   
      <td style="text-align: center;">{{$persona->tipoDocumento}}</td> 
      <td>{{$persona->username}}</td> 
      <td>{{$persona->email}}</td> 
      <td>{{$persona->password}}</td>    
      <td><img src="./storage/313247_171303399615225_971034462_n.jpg" alt="{{$persona->nombreCompleto}}" class="img-responsive" widht="300" height="300"  /></td>

      <td>
       <a class="btn btn-danger btn-xs" href="{{ route('persona/destroy',['cedula' =>$persona->cedula] )}}" onclick="return confirm('¿Seguro desea eliminarlo?')" >Eliminar</a>
     </td>   


     </tr>
   @endforeach
  </tbody>
  </table>


  </div><!--/.LISTADOS tabla row--> 

@endsection




