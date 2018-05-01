@extends('layout.panel')
@section('title', 'Registrar cliente')

@Section('contenido')



<!--agrego codigo del formulario dentro de las etiquetas body -->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
   <div class="panel panel-primary">
     <div class="panel-heading" role="tab" id="headingOne">
       <h4 class="panel-title">
         <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           Registrar un nuevo usuario
         </a>
       </h4>
     </div>
     <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
       <div class="panel-body">

         <!--Aqui va el formulario de registro de un nuevo usuario-->
         <form class="row" action="{{route('solidario.users.store')}}" method="post" enctype="multipart/form-data">
           <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

           <div class="box-body">
               <div class="form-group">
                   <label  for="name">Username:</label>
                       <input class="form-control" type="text" name="name" value="" placeholder="Nombre" required>
               </div>

               <div class="form-group">
                   <label  for="name">Password:</label>
                       <input class="form-control" type="password" name="password" value="" placeholder="*******" required>
               </div>

               <div class="form-group">
                   <label  for="name">Verificar Password:</label>
                       <input class="form-control" type="password" name="verifypassword" value="" placeholder="*******" required>
               </div>

               <div class="form-group">
                   <label  for="correo">Correo:</label>
                       <input class="form-control" type="email" name="email" value="" placeholder="Correo" required>
               </div>
               
           </div><!-- /.box-body -->

           <div class="form-group col-sm-2 col-sm-offset-3">
               <button class="btn btn-primary">Registrar</button>
           </div>

         </form>

       </div>
     </div>
   </div>
 </div>

 <hr>
 <table class="table table-hover table-condensed">
   <thead>
     <tr>
       <th>Nombre</th>
       <th>Email</th>
       <th>Editar</th>
       <th>Eliminar</th>
     </tr>
   </thead>
   <tbody>
     @foreach($users as $usuario)
       <tr>
         <td>{{$usuario->name}}</td>
         <td>{{$usuario->email}}</td>
         <td><a href=" {{ route('solidario.users.edit',$usuario->id) }} " class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
         <td><a href=" {{ route('solidario.users.destroy',$usuario->id) }} " class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
       </tr>
     @endforeach
   </tbody>
 </table>

 {!! $users->render() !!}


@endsection
