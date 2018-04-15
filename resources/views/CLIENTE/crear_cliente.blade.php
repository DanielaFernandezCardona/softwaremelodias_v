@extends('layout.panel')
@section('title', 'Registrar cliente')

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


                <form class="form-horizontal" method="post" action="/crearPersona"  enctype="multipart/form-data" >
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend class="text-center header">Formulario Persona</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="nombre" name="nombre" type="text" placeholder="Nombres" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="apellido" name="apellido" type="text" placeholder="Apellidos" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                          <div class="col-md-8">
                          <select class="form-control" id="tipoDocumento" name="tipoDocumento">
                            <option value="cedula">Cédula</option>
                            <option value="cedulaExtranjeria">Cédula Extranjería</option>
                             <option value="tarjetaIdentidad">Tarjeta Identidad</option>
                          </select>
                        </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-cc bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="cedula" name="cedula" type="text" placeholder=" Número documento" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="direccion" name="direccion" type="text" placeholder="Direccion" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                          <!--sirve para cambiar el icono que sale enseguida -->
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="telefono" name="telefono" type="text" placeholder="Teléfono" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                          <div class="col-md-8">
                          <select class="form-control" id="rol" name="rol">
                            <option value="administrador">Administrador</option>
                            <option value="empleado">Empleado</option>
                          </select>
                        </div>
                        </div>
                   
                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-smile-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="username" name="username" type="text" placeholder="username" class="form-control">
                            </div>
                        </div> 

                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                            </div>
                        </div>                     

                       <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-unlock-alt bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control">
                            </div>
                        </div>

                        <!--<div class="form-group">
                             <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-file-photo-o bigicon"></i></span>
                             <div class="col-md-8">
                          <input type="file" class="form-control-file" id="foto" name="foto">
                          </div>
                        </div>-->

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


