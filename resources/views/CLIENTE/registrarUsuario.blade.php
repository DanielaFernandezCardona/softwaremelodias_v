<!DOCTYPE html>
<html lang="en">
<head>

{!! Html::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
<!--{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') !!}-->

{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') !!}
{!! Html::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}
{!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') !!}
{!! Html::style('./css/menu.css') !!}
  

    <meta charset="UTF-8">
    <title>Servicio web BILLARLANDIA</title>
    <link rel="stylesheet" href="welcome/iconos/css/fontello.css">
    <link rel="stylesheet" href="welcome/css/menu.css">
    <link rel="stylesheet" href="welcome/css/estilos-index.css">
    <link rel="stylesheet" href="welcome/css/footer.css">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <header>
        <img src="welcome/images/Logo.png" class="img-logo">
        <label for="check" class="icon" style="color: white;">Melodias Billares'Software </label>

        <input type="checkbox" id="check">
        <label for="check" class="icon-menu"></label>

        <nav class="menu">
            <ul>
                <li><a href="/" >Inicio</a></li>
                <li><a href="/productosWelcome">Productos</a></li>
                <li><a href="nosotros">Contáctanos</a></li>
                <li><a href="/registrarUsuario" style="background:#df6666;color:white;">Regístrate</a></li>
                <li><a href="login">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
 <div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
               @if(Session::has('success'))
               <div class="alert alert-success" role="alert">
                <strong>Bien!</strong> {!! session('success') !!}.
              </div>
                 @endif
                  <!--nada-->

                <form class="form-horizontal" method="post" action="/crearPersona1"  enctype="multipart/form-data" >
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend class="text-center header">Regístrate en nuestra plataforma</legend>

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
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-smile-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="username" name="username" type="text" placeholder="username" class="form-control">
                            </div>
                        </div> 

                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="ingrese Email" class="form-control" >
                            </div>
                        </div>                     

                       <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-unlock-alt bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="password" name="password" type="password" placeholder="ingrese Contraseña" class="form-control" >
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
        
    </main>
    <footer>
        <a title="Twitter" href="https://twitter.com/?lang=es"><label class="icon-twitter" /></a>
        <a title="Facebook" href="https://es-la.facebook.com"><label class="icon-facebook" /></a>
        <a title="Instagram" href="https://www.instagram.com/?hl=es-la"><label class="icon-instagram" /></a>
    </footer>
</body>
</html>
