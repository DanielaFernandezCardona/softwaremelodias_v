<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/menu.css">
-->

{!! Html::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
<!--{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') !!}-->

{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') !!}
{!! Html::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}
{!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') !!}
{!! Html::style('./css/menu.css') !!}
  


  
<title>@yield('title')</title>
  
  <style type="text/css">
  .header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
  }

  .bigicon {
    font-size: 35px;
    color: #36A0FF;
  }</style>



</head>
<!--- dentroo de esta etiqueta no puede ir ningun script 

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/menu.css" rel="stylesheet">
-->
<body>
 

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
          <li><a href="/listarproducto"> Listar productos</a></li>
          <li><a href="/agregar_stock"> Agregar al Stock</a></li>
        </ul>



        <li data-toggle="collapse" data-target="#venta" class="collapsed">
          <a href="#"><i class="fa fa-calculator fa-lg"></i> Ventas <span class="arrow"></span></a>
        </li>  
        <ul class="sub-menu collapse" id="venta">
          <li><a href="/apertura_caja">Apertura caja</a></li>
          <li><a href="/registrar_venta">Registrar venta</a></li>
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


        <li data-toggle="collapse" data-target="#mesa" class="collapsed">
          <a href="#"><i class="fa fa-barsfa-lg"></i> Mesas <span class="arrow"></span></a>
        </li>
        <ul class="sub-menu collapse" id="mesa">
          <li><a href="/mesa">Crear mesa</a></li>
        </ul>


      </ul>
    </div>
  </div>


  <!--agrego codigo del formulario dentro de las etiquetas body -->

  @yield('contenido')

</body>
</html>