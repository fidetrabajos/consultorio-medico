<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Especilidadilidad nueva</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="css/index.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>


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
</div>
</div>
	</div>
</div>
<br>
<br>
<br>
<br>

<div class="container">
	
	<div class="row ">	
	<center>	
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			
<img src="img/especialidad3.jpg" alt="..." class="img-thumbnail">



			
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<img src="img/especialidad1.jpg" alt="..." class="img-thumbnail">
		</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<img src="img/especialidad2.jpg" alt="..." class="img-thumbnail">
				</div>
		</center>		
	</div>
</div>
<br>

<div class="container">


	
<div class="row ">
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 well">
			

<p><h1><small>Ingreso de nuevo centro médico</small></h1></p>

<form role="form" id="form" name="form" method="post" action="agregarEspecialidad.php">
  <div class="form-group">
    <label for="nombre">Especialidad</label>
    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese la nueva Especialidad">
  </div>
  <div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" rows="3" class="form-control" id="descripcion" placeholder="Digite una breve descripcíon" ></textarea>
  </div>
<p>
 <input type="submit" name="agregar" id="agregar" value="Agregar" />
<button class="btn btn-default"> <a href="configSistema.php">Volver </a></button></center></p>
</form>


		</div>
	


</div>



</div>



	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
<?php
session_start();
include("fondo.php");
include("Config/config.php")


?>



</body>
</html>