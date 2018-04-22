@extends('layout.panel')
@section('title', 'Agregar al stock')

@Section('contenido')


<!--agrego codigo del formulario dentro de las etiquetas body -->

<div class="container" style="margin-left:21%; ">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <legend class="text-center header">Agregar productos al stock</legend>
                        
             <form role="search" method="post" action="/producto/search">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                        <div class="row text-center" style="margin-left:34%;">
                            <div class="col-lg-6">
                            <div class="input-group">
                              <input id="nombreProducto" name="nombreProducto" type="text" class="form-control" placeholder="Search for...">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Buscar</button>
                              </span>
                            </div><!-- /input-group -->
                          </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                        </form>

                        <legend class="text-center header">Lista de productos</legend>
                        @if(isset($details))
                        <p> El resultado de la busqueda  <b> {{ $query }} </b> es</p>
                        <h2>Detalles del producto</h2>
                        <table class="table table-striped" >
                              <th>Codigo Producto</th>
                              <th>Nombre Producto</th>
                              <th>Unidades Producto</th>
                              <th>Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($details as $article)
                            <tr>
                              <td ><input type="text" id="codigo" name="codigo" value="{{$article->codigoProducto}}" style="border:0;" readonly></td>
                              <td ><input type="text" id="nombre" name="nombre" value="{{$article->nombreProducto}}" style="border:0;" readonly></td>
                              <td><input type="text" id="unidades" name="unidades"><td>
                               <td>    <input type="button" class="btn btn-success btn-lg"  value="Agregar" onclick="pruebaAjax();"></td>
                            
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            @endif

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
  
  function pruebaAjax(){
    var codigoProducto=document.getElementById("codigo").value;
    var nombreProducto=document.getElementById("nombre").value;
    var unidades=document.getElementById("unidades").value;
console.log("cassd"+codigoProducto);
  console.log("12312"+nombreProducto);
  console.log("1231232"+unidades);


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

</script>

@endsection