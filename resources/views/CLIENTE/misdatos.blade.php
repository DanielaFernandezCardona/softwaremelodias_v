@extends('layout.panel')
@section('title', 'Registrar cliente')

@Section('contenido')

<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">Actualizar Usuario</div>
	<!-- Main Form -->
	<div class="login-form-1">
		{!! Form::model($persona,['route' => 'usuario/update', 'class' => 'form-horizontal','method' => 'post', 'novalidate' ]) !!}
		{!! Form::hidden('id', $persona->id) !!}
		{!! Form::hidden('password', $persona->password) !!}

		<div class="login-form-main-message"></div>
		<div class="main-login-form">
			<div class="login-group">
				
				<div class="form-group">
				 <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
				 <div class="col-md-8">
                           	{!! Form::text('nombreCompleto', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'Nombre','id'=>'nombreCompleto','name'=>'nombreCompleto']) !!}
                        </div>   	
				</div>
				
				<div class="form-group">
					 <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">     
					{!! Form::text('direccion', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'Nombre','id'=>'direccion','name'=>'direccion']) !!}
				</div>
				</div>
                

                <div class="form-group">
					     <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
					     <div class="col-md-8">
                          
					{{ Form::select('tipoDocumento', ['tarjetaIdentidad'=> 'tarjetaIdentidad','cedula'=>'cedula','cedulaExtranjera'=>'cedulaExtranjera'],null, ['id' => 'tipoDocumento','class' => 'form-control']) }}
					</div>	
				</div>
                			

			<!--
				
				<div class="form-group">
					{!! Form::label('cedula', 'Cedula',['class' => 'sr-only']) !!}
					{!! Form::text('cedula', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'Nombre','id'=>'cedula','name'=>'cedula']) !!}
				-->	

				</div>
				<div class="form-group">
                     <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-cc bigicon"></i></span>
                            <div class="col-md-8">
					{!! Form::text('cedula', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'Direccion','id'=>'cedula','name'=>'cedula','readonly']) !!}
					</div>
				</div>

				<div class="form-group">
                     <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-cc bigicon"></i></span>
                            <div class="col-md-8">
					{!! Form::text('direccion', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'Direccion','id'=>'direccion','name'=>'direccion']) !!}
					</div>
				</div>


  				<div class="form-group">
                     <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-cc bigicon"></i></span>
                            <div class="col-md-8">
					{!! Form::text('telefono', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'telefono','id'=>'telefono','name'=>'telefono']) !!}
					</div>
				</div>

				 <div class="form-group">
					     <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
					     <div class="col-md-8">
                          
					{{ Form::select('rol', ['empleado'=> 'empleado','rol'=>'rol','cliente'=>'cliente'],null, ['id' => 'rol','class' => 'form-control']) }}
					</div>	
				</div>


				<div class="form-group">
					<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-cc bigicon"></i></span>
                            <div class="col-md-8">
					{!! Form::label('username', 'Email',['class' => 'sr-only']) !!}
					{!! Form::text('username', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'username','id'=>'username','name'=>'username']) !!}
					</div>

				</div>
				<div class="form-group"><span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-cc bigicon"></i></span>
                            <div class="col-md-8">
					{!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'Telefono','id'=>'email','name'=>'email']) !!}
				</div>
				</div>
                

                <div class="form-group">
                	<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-cc bigicon"></i></span>
                            <div class="col-md-8">
					{!! Form::text('password', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'password','id'=>'password','name'=>'password','readonly']) !!}
				</div>
				</div>

				<!--
				<div class="form-group">
					{!! Form::label('Rol', 'Rol') !!}
					{{ Form::select('rol', ['Administrador'=> 'Administrador','Lector'=>'Lector'],null, ['id' => 'rol','class' => 'form-control','onchange'=>'myFunction()']) }}	
				</div>
                -->
				
			</div>
			{!! Form::submit('Guardar', ['class' => 'btn btn-success ' ] ) !!}
		</button>
	</div>
	
</form>
</div>
<!-- end:Main Form -->
</div>

@endsection