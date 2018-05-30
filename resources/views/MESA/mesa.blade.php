@extends('layout.panel')
@section('title', 'Registrar mesa')

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


                <form class="form-horizontal" method="post" action="/mesa"  enctype="multipart/form-data" >
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend class="text-center header">Formulario Mesas</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <!--<input id="nombre" name="numero" type="text" placeholder="Número" class="form-control">-->
                            <select class="form-control" id="numeroMesa" name="numeroMesa">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group">
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                          <div class="col-md-8">
                          <select class="form-control" id="tipoMesa" name="tipoMesa">
                            <option value="bandas">Tres bandas</option>
                            <option value="pool">Pool</option>
                            <option value="pool">Snooker</option>
                          </select>
                        </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-dollar bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="valor5Minutos" name="valor5Minutos" type="text" placeholder=" Costo 5 Minutos de Mesa" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2  text-center"><i class="fa fa-tachometer bigicon "></i></span>
                            <div class="col-md-8">
                                <input id="tiempoInicio" name="tiempoInicio" type="datetime-local" class="form-control" required>
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


