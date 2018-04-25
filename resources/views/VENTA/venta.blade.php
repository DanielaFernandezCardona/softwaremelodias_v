@extends('layout.panel')
@section('title', 'Registrar venta')

@Section('contenido')



<!-- Datepicker Files -->
<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker3.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap-standalone.css')}}">
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<!-- Languaje -->
<script src="{{asset('js/bootstrap-datepicker.es.min.js')}}"></script>  



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


                  <legend class="text-center header">Buscar Cliente</legend>
                        
             <form role="search" method="post" action="/cliente/search">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                        <div class="row text-center" style="margin-left:34%;">
                            <div class="col-lg-6">
                            <div class="input-group">
                              <input id="nombreCliente" name="nombreCliente" type="text" class="form-control" placeholder="Search for...">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Buscar</button>
                              </span>
                            </div><!-- /input-group -->
                          </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                        </form>



                <form class="form-horizontal" method="post" action="/crearProducto"  enctype="multipart/form-data" >
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend class="text-center header">Registrar venta</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fecha" name="fecha" type="text" placeholder="fecha" class="form-control datepicker">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="usuario" name="usuario" type="text" placeholder="usuario" class="form-control">

                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                {!! Form::text('nombreCompleto',$persona['nombreCompleto'], ['class' => 'form-control' , 'required' => 'required','placeholder' =>'Cliente']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-adjust bigicon"></i></span>
                          <div class="col-md-8">
                          <select class="form-control" id="estado" name="estado">
                            <option value="congelada">Congelada</option>
                            <option value="descongelada">Descongelada</option>
                          </select>
                        </div>
                        </div>

                        <div class="form-group">
                          <!--sirve para cambiar el icono que sale enseguida -->
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-clock-o bigicon"></i></span>
                            <div class="col-md-8">
                              <input id="tiempoInicio" name="tiempoInicio" type="text" placeholder="Tiempo inicio" class="form-control">
                            </div>
                        </div>


                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-clock-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="tiempoFin" name="tiempoFinoFin" type="text" placeholder="Tiempo fin" class="form-control">
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


                <legend class="text-center header">Buscar Producto</legend>




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


            </div>
        </div>
    </div>
</div>

<script >
    $('.datepicker').datepicker({

        format: "dd/mm/yyyy",
        languaje:"es",
        autoclose: true
    });

</script>>
@endsection



