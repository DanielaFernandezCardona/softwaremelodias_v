<!doctype html>
<html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- rutas -->
  <link rel="stylesheet" href="./css/login/login.css" >
  <script src="./js/loginjs/login.js"></script>
</head>

<body>
  <div class="container">

    <div class="row" id="pwd-container">
      <div class="col-md-4"></div>

      <div class="col-md-4">
        <section class="login-form">
          <form method="post" action="/logear" role="login">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           @if(Session::has('error'))
           <div class="alert alert-success" role= "alert">
            <strong>success:</strong>
            {!! session('error') !!}
          </div>
          @endif
          <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg" value="joestudent@gmail.com" />

          <input type="password" class="form-control input-lg" id="password" name="password" placeholder="password" required="" />

          <!--<div class="pwstrength_viewport_progress"></div>-->

           <div class="form-group login-group-checkbox">
                <input type="checkbox" id="lg_remember" name="lg_remember">
                <label for="lg_remember">Recordar los datos de sesión.</label>
           </div>
           <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Entrar</button>
          <div>
            <a href="#">Crear una cuenta</a> or <a href="#">Cambiar password</a>
          </div>

        </form>

        <div class="form-links">
          <a href="#">www.website.com</a>
        </div>
      </section>
    </div>
  </div>
</div>
</div>
</body>
</html>
