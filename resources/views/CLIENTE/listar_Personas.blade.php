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
}</style>



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

<div class="container" style="width:400px; "> 
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header" style="color:white;text-align: center;">LISTADO DE PERSONAS</h1>
      </div>
    </div><!--/.row-->


    <table class="table table-hover" style="background-color:white;color:black; " >
     <thead>
      <tr>
       <th data-field="nombreCompleto" data-align="right">nombreCompleto</th>
       <th data-field="cedula">cedula</th>
       <th data-field="direccion"> direccion</th>
       <th data-field="telefono">telefono</th>
       <th data-field="rol"> rol</th>
       <th data-field="tipoDocumento"> tipoDocumento</th>
       <th data-field="username"> username</th>
       <th data-field="email">email</th>
       <th data-field="contrasena">contrasena</th>
       <!--<th data-field="foto"> foto</th>-->
     </tr>
   </thead>
   <tbody>
     <tr>
      @foreach($personas as $persona)
      <td>{{$persona->nombreCompleto}}</td>
      <td>{{$persona->cedula}}</td>
      <td>{{$persona->direccion}}</td>
      <td>{{$persona->telefono}}</td>
      <td style="text-align: center;">{{$persona->rol}}</td>   
      <td style="text-align: center;">{{$persona->tipoDocumento}}</td> 
      <td>{{$persona->username}}</td> 
      <td>{{$persona->email}}</td> 
      <td>{{$persona->contrasena}}</td>    
      <!--<td><img src="./storage/313247_171303399615225_971034462_n.jpg" alt="{{$persona->nombreCompleto}}" class="img-responsive" widht="300" height="300"  /></td>
      <td>-->
       <a class="btn btn-danger btn-xs" href="{{ route('persona/destroy',['cedula' =>$persona->cedula] )}}" onclick="return confirm('¿Seguro desea eliminarlo?')" >Eliminar</a>
     </td>   


     </tr>
   @endforeach
  </tbody>
  </table>


  </div><!--/.LISTADOS tabla row--> 







  </body>
</html>