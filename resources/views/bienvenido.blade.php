@extends('layout.panel')
@section('title', 'Bienvenido')

@Section('contenido')



<!--agrego codigo del formulario dentro de las etiquetas body -->

<div class="container" style="margin-left:21%; ">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
               @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                  <!--nada-->
                    <h1 style="text-align:center;margin:100px;">BIENVENIDO VISITANTE A NUESTRA PAGINA</h1>
                    <img class="img-thumbnail img-responsive" style="width: 50%;display: block;margin-left: auto;
  margin-right: auto; " src="welcome/images/Logo.png">
                
            </div>
        </div>
    </div>
</div>


@endsection


