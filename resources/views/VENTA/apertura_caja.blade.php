@extends('layout.panel')
@section('title', 'Apertura caja')

@Section('contenido')


<!--agrego codigo del formulario dentro de las etiquetas body -->

<div class="container" style="margin-left:21%; ">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Apertura de caja</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-money bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="base" name="base" type="text" placeholder="Saldo base" class="form-control" readonly value="100 000">
                            </div>
                        </div>      


                    </fieldset>
                </form>

<!--Inicia tabla--> 
<div class="container" style="width:400px; text-align: center; "> 
    <div class="row">
      <div  style="width:460px; " >
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
      <td><img src="./storage/313247_171303399615225_971034462_n.jpg" alt="{{$producto->nombreProducto}}" class="img-responsive" widht="300" height="300"  /></td> 


     </tr>
   @endforeach
  </tbody>
  </table>

  <div class="form-group">
     <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-success btn-lg">Confirmar</button>

    </div>
</div>

  </div><!--Finaliza tabla--> 


            </div>

        </div>
    </div>

</div>


@endsection