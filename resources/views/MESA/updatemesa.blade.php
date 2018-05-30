<!--agrego codigo del formulario dentro de las etiquetas body -->
@extends('layout.panel')
@section('title', 'Actualizar mesa')

@Section('contenido')

<div class="container" style="margin-left:21%; ">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
               @if(Session::has('success'))
               <div class="alert alert-success" role="alert">
                <strong>Bien!</strong> {!! session('success') !!}.
              </div>
                 @endif

		{!! Form::model($mesa,['route' => 'mesa/update', 'class' => 'form-horizontal','method' => 'post', 'novalidate','enctype'=>'multipart/form-data']) !!}
		{!! Form::hidden('id', $mesa->codigoMesa) !!}
		<legend class="text-center header">Actualizar Mesas</legend>
		<div class="login-form-main-message"></div>
		<div class="main-login-form">
			<div class="login-group">
				<div class="form-group">
					<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
					<div class="col-md-8">
						{{ Form::select('numeroMesa', ['1'=> '1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'],null, ['id' => 'numeroMesa','class' => 'form-control']) }}
					</div>
				</div>	
				<div class="form-group">
					<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
					<div class="col-md-8">
						{{ Form::select('tipoMesa', ['bandas'=> 'Tres Bandas','pool'=>'pool','snocker'=>'snocker'],null, ['id' => 'tipoMesa','class' => 'form-control']) }}
					</div>
				
				</div>
				<div class="form-group">
					 <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-tachometer bigicon"></i></span>
                            <div class="col-md-8">
					{{ Form::text('valor5Minutos', null, ['required' => 'required','class' => 'form-control']) }}
					</div>
				</div>
				<div class="form-group">
					<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-dollar bigicon"></i></span>
					<div class="col-md-8">
<!--				       	{{ Form::datetime('tiempoInicial', null, ['required' => 'required','class' => 'form-control']) }}	-->
                <input id="tiempoInicio" name="tiempoInicio" type="datetime-local" class="form-control" value={{$mesa->tiempoInicio}} required>
					</div>   
				</div>
			</div>
             <div class="form-group">
                            <div class="col-md-12 text-center">
			{!! Form::submit('Actualizar', ['class' => 'btn btn-success ' ] ) !!}
		      </div>
          </div>


              </div>

		{!! Form::close() !!}
	       </div>
	<!-- end:Main Form -->
        </div>
    </div>
</div>










@endsection