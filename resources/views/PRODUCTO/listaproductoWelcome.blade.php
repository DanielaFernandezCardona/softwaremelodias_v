<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Servicio web BILLARLANDIA</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="welcome/iconos/css/fontello.css">
    <link rel="stylesheet" href="welcome/css/menu.css">
    <link rel="stylesheet" href="welcome/css/estilos-index.css">
    <link rel="stylesheet" href="welcome/css/footer.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <header>
        <img src="welcome/images/Logo.png" class="img-logo">
        <input type="checkbox" id="check">
        <label for="check" class="icon-menu"></label>

        <nav class="menu">
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/productosWelcome" style="background:#df6666;color:white;">Productos</a></li>
                <li><a href="nosotros">Contáctanos</a></li>
                <li><a href="/registrarUsuario">Regístrate</a></li>
                <li><a href="login">Login</a></li>
            </ul>
        </nav>
    </header>

    
        
    <div class="container">
     <div class="row">

     @foreach($productos as $producto)
    
    <div class="col-sm-4 jumbotron text-center" style="margin-top: 7%; ">
          
          <p>{{$producto->nombreProducto}}</p>
          <img src="{{$producto->imagen}}"   widht="300" height="300">
          <p>{{$producto->precioventa}}  </p>

        </div>

     
   @endforeach
    
</div>
</div> 

    <footer>
        <a title="Twitter" href="https://twitter.com/?lang=es"><label class="icon-twitter" /></a>
        <a title="Facebook" href="https://es-la.facebook.com"><label class="icon-facebook" /></a>
        <a title="Instagram" href="https://www.instagram.com/?hl=es-la"><label class="icon-instagram" /></a>
    </footer>
</body>
</html>
