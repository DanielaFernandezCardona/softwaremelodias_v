
<!--agrego codigo del formulario dentro de las etiquetas body -->
@extends('layout.panel')
@section('title', 'Lista Libro')

@Section('contenido')
<div class="container" style="width:400px; "> 
    <div class="row">
      <div  style="width:800px; " >
        <h1 class="page-header" style="color:BLACK;text-align: center;">LISTADO DE PRODUCTOS</h1>
      </div>
    </div>


    <table class="table table-hover" style="background-color:white;color:black; " >
     <thead>
      <tr>
       <th data-field="codigoProducto" style="text-align: center;" data-align="right" >Código Producto</th>
       <th data-field="nombreProducto" style="text-align: center;">Nombre Producto</th>
       <th data-field="descripcion" style="text-align: center;"> Descripcion</th>
       <th data-field="unidades" style="text-align: center;"> Unidades</th>
       <th data-field="preciocompra" style="text-align: center;"> Precio Compra </th>
       <th data-field="precioventa" style="text-align: center;"> Precio Venta</th>
       <th data-field="imagen" style="text-align: center;"> Imagen</th>
     </tr>
   </thead>
   <tbody>
     <tr>
      @foreach($productos as $producto)
      <td>{{$producto->codigoProducto}}</td>
      <td>{{$producto->nombreProducto}}</td>
      <td>{{$producto->descripcion}}</td>
      <td>{{$producto->unidades}}</td>
       <td>{{$producto->preciocompra}}</td>
      <td>{{$producto->precioventa}}</td>
      <td><img src="{{$producto->imagen}}" alt="{{$producto->nombreProducto}}" class="img-responsive" widht="300" height="300"  /></td>

      <td>
       <a class="btn btn-danger btn-xs" href="{{ route('producto/destroy',['codigoProducto' =>$producto->codigoProducto] )}}" onclick="return confirm('¿Seguro desea eliminarlo?')" >Eliminar</a>
     </td>   


     </tr>
   @endforeach
  </tbody>
  </table>


  </div>
@endsection 