@extends('layout.panel')
@section('title', 'Agregar al stock')

@Section('contenido')


<!--agrego codigo del formulario dentro de las etiquetas body -->

<div class="container" style="margin-left:21%; ">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <legend class="text-center header">Agregar productos al stock</legend>
                        
             <form role="search" method="post" action="/producto/search">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                        <div class="row text-center" style="margin-left:34%;">
                            <div class="col-lg-6">
                            <div class="input-group">
                              <input id="nombreProducto" name="nombreProducto" type="text" class="form-control" placeholder="Search for...">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Buscar</button>
                              </span>
                            </div><!-- /input-group -->
                          </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                        </form>

                        <legend class="text-center header">Lista de productos</legend>

                       <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success btn-lg">Confirmar</button>
                            
                            </div>
                        </div>

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
     </tr>
   </thead>
   <tbody>
    @if($articles->count())
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->codigoProducto }}</td>
                    <td>{{ $article->nombreProducto }}</td>
                     <td><input type="text" name="unidades" id="unidades" ></td>   
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="3">no encontro el producto</td>
            </tr>
            @endif


  </tbody>
  </table>
       
      
            </div>
        </div>
    </div>
</div>

@if (count($articles) === 0)
       ... html showing no articles found
       @elseif (count($articles) >= 1)
       ... print out results
       @foreach($articles as $article)
       print article
       @endforeach
       @endif


@endsection