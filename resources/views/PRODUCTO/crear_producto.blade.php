@extends('layout.panel')
@section('title', 'Registrar producto')

@Section('contenido')



<!--agrego codigo del formulario dentro de las etiquetas body -->

<div class="container" style="margin-left:21%; ">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
               @if(Session::has('success'))
               <div class="alert alert-success" role="alert">
                <strong>Bien!</strong> {!! session('success') !!}.
              </div>
                 @endif



                <form class="form-horizontal" method="post" action="/crearProducto"  enctype="multipart/form-data" >
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend class="text-center header">Formulario producto</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-beer bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="nombreProducto" name="nombreProducto" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Agrega una descripción del producto" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calculator bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="unidades" name="unidades" type="text" placeholder="Unidades" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                          <!--sirve para cambiar el icono que sale enseguida -->
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-money bigicon"></i></span>
                            <div class="col-md-8">
                              <input id="preciocompraunidad" name="preciocompraunidad" type="text" placeholder="PrecioCompra" class="form-control">
                            </div>
                        </div>


                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-money bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="precioventaproducto" name="precioventaproducto" type="text" placeholder="PrecioVenta" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                             <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-file-photo-o bigicon"></i></span>
                             <div class="col-md-8">
                          <input type="file" class="form-control-file" id="imagen" name="imagen" required>
                          </div>
                        </div>

                       <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                                <button type="submit" class="btn btn-danger btn-lg">Cerrar</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



