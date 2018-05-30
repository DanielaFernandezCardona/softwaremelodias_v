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
                        
             <form role="search"  >
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                        <div class="row text-center" style="margin-left:34%;">
                            <div class="col-lg-6">
                            <div class="input-group">
                              <input id="nombreCliente" name="nombreCliente" type="text" class="form-control" placeholder="Search for...">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button" onclick="buscarCliente();">Buscar</button>
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
                                <input id="usuarios" name="usuarios" type="text" placeholder="usuario" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="numeroMesa" name="numeroMesa" type="text" placeholder="numeroMesa" class="form-control">
                            </div>
                        </div>
                        


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                               <input id="nombreCompletos" name="nombreCompletos" type="text" placeholder="nombreCompletos" class="form-control">
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



                    <legend class="text-center header">Buscar Producto</legend>
                <div class="row text-center" style="margin-left:34%;">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input id="nombreProducto" name="nombreProducto" type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="Button" onclick="buscarProducto();">Buscar</button>
                      </span>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <legend class="text-center header">Lista de productos</legend>
                <h2>Detalles del producto</h2>
                <table class="table table-striped" id="myTable" >
                  <th>Codigo Producto</th>
                  <th>Nombre Producto</th>
                  <th>Unidades Producto</th>
                  <th>Acción</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>




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

var incremento=1;




function buscarCliente(){



 var nombreCliente=document.getElementById("nombreCliente").value;

//   document.getElementById('usuario').value="mundo";

  document.getElementById("usuarios").value="asdasdasd";



//var formData = {nombreCliente:nombreCliente}; //Array 
 var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

// _token: '{{csrf_token()}}'





$.ajax({
    url : "/cliente/search",
    type: "POST",
    data : {nombreCliente, _token: '{{csrf_token()}}' },
    success: function(data, textStatus, jqXHR)
    {
      

data.forEach( function(valor, indice, array) {
    alert("En el índice " + indice + " hay este valor: " + valor);
});


      var res = data.split(":");

       var nombreCompletos =res[1].split(",");
       var cedula =res[2].split('"')

       console.log(res);
console.log(nombreCompletos);
       console.log(cedula);






    },
    error: function (jqXHR, textStatus, errorThrown)
    {
         console.log("error");
    }
});


        



}









function buscarProducto(){
 var nombreProducto=document.getElementById("nombreProducto").value;
    


    

var formData = {nombreProducto:nombreProducto}; //Array 
 var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

// _token: '{{csrf_token()}}'





$.ajax({
    url : "/producto/search",
    type: "POST",
    data : {formData, _token: '{{csrf_token()}}' },
    success: function(data, textStatus, jqXHR)
    {
      
        if(!data.includes("null")){

       var res = data.split(":");

       var codigoProducto =res[1].split(",");
       var nombreProducto =res[2].split('"')
        



  if(!doSearch(nombreProducto)==true){


       var table = document.getElementById("myTable");
       var row = table.insertRow(incremento);
       incremento++;

// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);


    // Add some text to the new cells:
    cell1.innerHTML = codigoProducto[0];
    cell2.innerHTML = nombreProducto[1];
    cell3.innerHTML = '<input type="text" name="codigo" '+ "id="+codigoProducto[0]+">"  ;
    cell4.innerHTML = "<input type='button' class='btn btn-success btn-lg'  value='Agregar' onclick='pruebaAjax(this);'"+"id="+codigoProducto+",1"+">";
    cell5.innerHTML = "<input type='button' class='btn btn-danger btn-lg'  value='Restar' onclick='pruebaRestar(this);'"+"id="+codigoProducto+",2"+">";
       }else {

            alert("no se puede ingresar de nuevo el articulo");

       }   



          } 
          else{
            alert("no se encontro el articulo revisar la escritura");


          } 
   

    },
    error: function (jqXHR, textStatus, errorThrown)
    {
         console.log("error");
    }
});

}




function doSearch(informe)
    {
      var tableReg = document.getElementById('myTable');
      var searchText = document.getElementById("nombreProducto").value.toLowerCase();
      var cellsOfRow="";
      var found=false;
      var compareWith="";
 
      // Recorremos todas las filas con contenido de la tabla
      for (var i = 1; i < tableReg.rows.length; i++)
      {
        cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
        found = false;
        // Recorremos todas las celdas
        for (var j = 0; j < cellsOfRow.length && !found; j++)
        {
          compareWith = cellsOfRow[j].innerHTML.toLowerCase();
          // Buscamos el texto en el contenido de la celda
          if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
          {
            found = true;
          }
        }
        if(found)
        {
          return found;
        } else
        return found;
      }
    }







</script>
@endsection



