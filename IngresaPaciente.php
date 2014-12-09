<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Paciente nuevo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="css/index.css" rel="stylesheet" type="text/css">
  <link href="css/ingresaPaciente.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>

<?php
session_start();
include("fondo.php");
include("Config/config.php");

?>





<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
      
       <div class="navbar-header">
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
        <a class="navbar-brand" href="index.php">ClínicaCR</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="">Sobre el centro</a></li>
            <li><a href="muestraEspecialidad.php" target="ext">Nuestras especialidades</a></li>
            <li><a href="muestraHospital.php">Instalaciones</a></li>
            <li><a href="IngresaPaciente.php">Solicita una cita</a></li>
          </ul>
        </div>
    </div>
  </div>
</div>
</div>
  </div>
</div>


	

<br>
<br>
<br>
<br>


<br>

<div class="container">


	
<div class="row ">
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
<p><img src="img/paciente2.jpg" alt="Responsive image" class="img-circle"></p>
<br>
<br>
<br>
<br>
<p><img src="img/paciente1.jpg" alt="Responsive image" class="img-circle"></p>
<br>
<br>
<br>
<br>
<p><img src="img/paciente3.jpg" alt="Responsive image" class="img-circle"></p>
	</div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="box-shadow2">
<center><p><h1><small>Solicita tu cita medica</small></h1></p></center>
<hr>
</div>
<div class="container">
<form role="form" id="form" name="form" method="post" action="agregarPaciente.php">

  <div class="form-group">
    
    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre">
  </div>
   <div class="form-group">
   
    <input name="apellido1" type="text" class="form-control" id="apellido1" placeholder="Ingrese el primer apellido">
  </div>
  <div class="form-group">
    
      
   <input name="apellido2" type="text" class="form-control" id="apellido2" placeholder="Ingrese el segundo apellido"> 
 
 
  </div>
  
  
  
  <div class="row">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="form-group">
  
    <input name="telefono" type="text" class="form-control" id="telefono" placeholder="Digita tu numero telefónico">
  </div>
  </div>
  </div>
  <div class="form-group">
 
    <input name="direccion" type="text" class="form-control" id="direccion" placeholder="Ingrese la dirección exacta de residencia">
  </div>
  <div class="form-group">
  
    <input name="sintoma" type="text" class="form-control" id="sintoma" placeholder="Menciona alguno de tus síntomas">
  </div>

    <div class="row">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <div class="form-group">
    <label for="fecha">Fecha de solicitud de tu cita</label>
    <br>
    <br>
    <input name="fecha" type="date" class="form-control" id="fecha" value="dd/MM/yyyy">
  </div>
    </div>
      </div>


  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="form-group"><br>
        <br>
</div>

</div>
  </div>
  
   <hr>
<p> <center> <input type="submit" name="agregar" id="agregar" value="Agregar" />
 
</p>
</form>
<button  class="btn btn-default"><a href="index.php">Cancelar</a></button></center>
</div>

    </div>

</div>
</div>



	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>


</body>
</html>