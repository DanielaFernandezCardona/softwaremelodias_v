<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



   <!-- dentro de la etiqueta head llamo el menu.css -->
   <link rel="stylesheet" href="./css/menu.css">

    <title>TITULO DE PRUEBA PARA CLIENTES</title>

    <style type="text/css">
  .header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
}

.bigicon {
    font-size: 35px;
    color: #36A0FF;
}

</style>


  </head>
<!--- dentroo de esta etiqueta no puede ir ningun script 

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/menu.css" rel="stylesheet">
-->
  <body>
    <h1>Hello, world!</h1>


<div class="nav-side-menu">
    <div class="brand">Melodias Billares'Software</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                
                 <li  data-toggle="collapse" data-target="#usuario" class="collapsed">
                  <a href="#"><i class="fa fa-group fa-lg"></i> Gestion de Usuarios <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="usuario">
                    <li><a href="/crear_cliente">Crear Persona</a></li>
                    <li><a href="/listar_Personas">Listar Personas</a></li>
                    <li><a href="#">Mis Datos</a></li>
           
                </ul>

                

                <li data-toggle="collapse" data-target="#producto" class="collapsed">
                  <a href="#"><i class="fa fa-glass fa-lg"></i> Productos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="producto">
                  <li><a href="/crear_producto"> Crear producto</a></li>
                  <li>Listar productos</li>
                  <li>Agregar al Stock</li>
                </ul>
                


                <li data-toggle="collapse" data-target="#venta" class="collapsed">
                  <a href="#"><i class="fa fa-calculator fa-lg"></i> Ventas <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="venta">
                  <li><a href="/apertura_caja">Apertura caja</a></li>
                  <li>Registrar venta</li>
                  <li><a href="/cierre_caja">Cierre caja</a></li>
                  <li>Consultar ventas</li>
                </ul>



              <li  data-toggle="collapse" data-target="#reporte" class="collapsed">
                  <a href="#"><i class="fa fa-area-chart fa-lg"></i> Reportes <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="reporte">
                    <li class="active"><a href="#">CSS3 Animation</a></li>
                    <li><a href="#">General</a></li>
                    <li><a href="#">Buttons</a></li>
                    <li><a href="#">Tabs & Accordions</a></li>
                    <li><a href="#">Typography</a></li>
                    <li><a href="#">FontAwesome</a></li>
                    <li><a href="#">Slider</a></li>
                    <li><a href="#">Panels</a></li>
                    <li><a href="#">Widgets</a></li>
                    <li><a href="#">Bootstrap Model</a></li>
                </ul>

                <li>
                  <a href="#">
                  <i class="fa fa-trophy fa-lg"></i> Torneos
                  </a>
                  </li>



                 <li>
                  <a href="#">
                  <i class="fa fa-calendar fa-lg"></i> Citas
                  </a>
                  </li>


            </ul>
     </div>
</div>


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
                                <input id="numerocedula" name="numerocedula" type="text" placeholder=" Número documento" class="form-control">
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






  </body>
</html>