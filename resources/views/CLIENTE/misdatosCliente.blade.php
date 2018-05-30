@extends('layout.panel')
@section('title', 'Registrar cliente')

@Section('contenido')

<!-- REGISTRATION FORM -->
<div class="container" style="margin-left:21%; ">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
              
                  <!--nada-->

<div class="text-center" style="padding:50px 0">
	<div class="logo">Modificar Usuario</div>
	<!-- Main Form -->
	<div class="login-form-1">
		{!! Form::model($persona,['route' => 'usuario/update', 'class' => 'form-horizontal','method' => 'post', 'novalidate' ]) !!}
		{!! Form::hidden('id', $persona->id) !!}
		{!! Form::hidden('password', $persona->password) !!}

		@if(session()->has('success'))
           <div class="alert alert-success" role= "alert">
            <strong>success:</strong>
            {!! session()->get('success')  !!}
          </div>
          @endif

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
					{!! Form::text('cedula', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'Cedula','id'=>'cedula','name'=>'cedula','readonly']) !!}
					</div>
				</div>

				<div class="form-group">
                     <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>
                            <div class="col-md-8">
					{!! Form::text('direccion', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'Direccion','id'=>'direccion','name'=>'direccion']) !!}
					</div>
				</div>


  				<div class="form-group">
                     <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
					{!! Form::text('telefono', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'telefono','id'=>'telefono','name'=>'telefono']) !!}
					</div>
				</div>

				 <div class="form-group">
					     <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
					     <div class="col-md-8">
                          
					{{ Form::select('rol', ['cliente'=>'cliente'],null, ['id' => 'rol','class' => 'form-control']) }}
					</div>	
				</div>


				<div class="form-group">
					<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-smile-o bigicon"></i></span>
                            <div class="col-md-8">
					{!! Form::label('username', 'Email',['class' => 'sr-only']) !!}
					{!! Form::text('username', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'username','id'=>'username','name'=>'username']) !!}
					</div>

				</div>
				<div class="form-group"><span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
					{!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'required','placeholder' =>'Telefono','id'=>'email','name'=>'email']) !!}
				</div>
				</div>
                

                <div class="form-group">
                	<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-unlock-alt bigicon"></i></span>
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
			{!! Form::submit('Modificar', ['class' => 'btn btn-success ' ] ) !!}
		</button>
	</div>
	
</form>
</div>
<!-- end:Main Form -->
</div>



          </div>
        </div>
    </div>
</div>


@endsection