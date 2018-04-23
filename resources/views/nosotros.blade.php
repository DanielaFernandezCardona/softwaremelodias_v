<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Servicio web BILLARLANDIA</title>
    <link rel="stylesheet" href="welcome/iconos/css/fontello.css">
    <link rel="stylesheet" href="welcome/css/menu.css">
    <link rel="stylesheet" href="welcome/css/estilos-index.css">
    <link rel="stylesheet" href="welcome/css/footer.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <header>
        <img src="welcome/images/logo_magtimus3.png" class="img-logo">
        <input type="checkbox" id="check">
        <label for="check" class="icon-menu"></label>

        <nav class="menu">
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="servicios">Servicios</a></li>
                <li><a href="nosotros" style="background:#df6666;color:white;">Conactanos</a></li>
                <li><a href="login">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

      <div class="jumbotron jumbotron-sm">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 col-lg-12">
                      <h1 class="h1">
                          Contactanos <small>Siéntete libre de contactarnos!</small></h1>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="well well-sm">
                      <form>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="name">
                                      Nombre de contacto</label>
                                  <input type="text" class="form-control" id="name" placeholder="Ingresa el nombre" required="required" />
                              </div>
                              <div class="form-group">
                                  <label for="email">
                                      Dirección de correo (E-mail)</label>
                                  <div class="input-group">
                                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                      </span>
                                      <input type="email" class="form-control" id="email" placeholder="Ingrese el email" required="required" /></div>
                              </div>
                              <div class="form-group">
                                  <label for="subject">
                                      Tipo de contacto</label>
                                  <select id="subject" name="subject" class="form-control" required="required">
                                      <option value="na" selected="">Elija una opción:</option>
                                      <option value="service">Servicio General</option>
                                      <option value="suggestions">Preguntas</option>
                                      <option value="product">Soporte del producto</option>
                                      <option value="product">PQRS</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="name">
                                      Message</label>
                                  <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                      placeholder="Escriba su mensaje"></textarea>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                  Enviar mensaje</button>
                          </div>
                      </div>
                      </form>
                  </div>
              </div>
              <div class="col-md-4">
                  <form>
                  <legend><span class="glyphicon glyphicon-globe"></span> Nuestra oficina</legend>
                  <address>
                      <strong>Billar la Tebaida</strong><br>
                      Carr. 55-2#321, Tebaida 2132<br>
                      Armenia Quindio, 744000<br>
                      <abbr title="Phone">
                          Telefono:</abbr>
                      (321) 729-4990
                  </address>
                  <address>
                      <strong>Billar la Tebaida</strong><br>
                      <a href="mailto:#">billarlatebaida@gmail.com</a>
                  </address>
                  </form>
              </div>
          </div>
      </div>
        <div class="content-for">
            <div class="content-five">
                <div class="content-item4">
                    <h4>GRACIAS POR VISITAR NUESTRO SITIO, LO ESTAMOS CONSTRUYENDO...</h4>
                    <p>Las grandes ideas toman tiempo...</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <a title="Twitter" href="https://twitter.com/?lang=es"><label class="icon-twitter" /></a>
        <a title="Facebook" href="https://es-la.facebook.com"><label class="icon-facebook" /></a>
        <a title="Instagram" href="https://www.instagram.com/?hl=es-la"><label class="icon-instagram" /></a>
    </footer>
</body>
</html>
