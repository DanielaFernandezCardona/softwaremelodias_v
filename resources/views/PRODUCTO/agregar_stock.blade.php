@extends('layout.panel')
@section('title', 'Agregar al stock')

@Section('contenido')


<!--agrego codigo del formulario dentro de las etiquetas body -->

<div class="container" style="margin-left:21%; ">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <legend class="text-center header">Agregar productos al stock</legend>
                        
             <!--<form role="search" method="post" action="/producto/search">-->
                <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                    
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
                       <!-- </form> -->

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
                         
                       <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success btn-lg">Confirmar</button>
                            
                            </div>
                        </div>

        



       
      
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
  
 var incremento=1;




  function pruebaAjax(dato){


var datos=dato.getAttribute('id').split(",");

    var codigoProducto=datos[0];
    var unidades=document.getElementById(datos[0]).value;

console.log(codigoProducto);
console.log(unidades);



var formData = {codigo:codigoProducto,unidadesproducto:unidades}; //Array 
 var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

// _token: '{{csrf_token()}}'


$.ajax({
    url : "/update_Producto",
    type: "POST",
    data : {formData, _token: '{{csrf_token()}}' },
    success: function(data, textStatus, jqXHR)
    {
       alert(data);
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
         console.log("error");
    }
});


  }


  function pruebaRestar(dato){

var datos=dato.getAttribute('id').split(",");

    var codigoProducto=datos[0];
    var unidades=document.getElementById(datos[0]).value;





var formData = {codigo:codigoProducto,unidadesproducto:unidades}; //Array 
 var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

// _token: '{{csrf_token()}}'




$.ajax({
    url : "/search_restar",
    type: "POST",
    data : {formData, _token: '{{csrf_token()}}' },
    success: function(data, textStatus, jqXHR)
    {
       alert(data);
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