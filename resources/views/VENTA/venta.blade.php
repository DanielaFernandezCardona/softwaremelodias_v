@extends('layout.panel')
@section('title', 'Registrar venta')

@Section('contenido')



<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Jquery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
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
                                <input id="cliente" name="cliente" type="text" placeholder="cliente" class="form-control">
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



