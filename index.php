<html>
<head>
	<title>Formulario de registro</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Registrate</a></li>
        <li><a href="#">Registra tu asistencia</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
	<div class="alert alert-info">
  		<strong>Atención!</strong> Estimado visitante, es necesario que llenes todos los campos para conocernos, ¡Muchas gracias!
		No te preocupes <strong>Esculab Puno</strong> mantendrá seguro tus datos
	</div>
	<div class="container">
  <form>
  	<div class="form-group row">
      <label for="inputDni" class="col-sm-2 col-form-label">DNI:</label>
      <div class="col-sm-10">
        <input type="dni" class="form-control" id="dni" placeholder="DNI">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputNombres" class="col-sm-2 col-form-label">Nombres y Apellidos:</label>
      <div class="col-sm-10">
        <input type="nombre" class="form-control" id="nombre" placeholder="Nombres y apellidos">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEdad" class="col-sm-2 col-form-label">Edad:</label>
      <div class="col-sm-10">
        <input type="edad" class="form-control" id="edad" placeholder="Edad">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputCelular" class="col-sm-2 col-form-label">Número de celular:</label>
      <div class="col-sm-10">
        <input type="celular" class="form-control" id="celular" placeholder="Numero de Celular">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputInstitucion" class="col-sm-2 col-form-label">Institución:</label>
      <div class="col-sm-10">
        <input type="institucion" class="form-control" id="institucion" placeholder="Institucion">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail" class="col-sm-2 col-form-label">Correo Electrónico:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Email">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputIngreso" class="col-sm-2 col-form-label">Hora de Ingreso:</label>
      <div class="col-sm-10">
        <input type="ingreso" class="form-control" id="ingreso" placeholder="<?php echo date("H:i:s"); ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputMotivo" class="col-sm-2 col-form-label">Motivo de Visita:</label>
      <div class="col-sm-10">
        <input type="motivo" class="form-control" id="motivo" placeholder="Motivo de visita">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2"></label>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Acepto los terminos y condiciones
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10 text-center">
        <button type="buttom" class="btn btn-primary btn-lg">Registrame</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>