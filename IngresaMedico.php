<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Médico nuevo</title>
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
        <a class="navbar-brand" href="inicio.php">ClínicaCR</a>
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
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
<img src="img/doctor2.jpg" class="img-responsive" alt="Responsive image">



			
		</div>
		
			
		</center>		
	</div>
</div>
<br>

<div class="container">


	
<div class="row ">
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="box-shadow2">
<center><p><h1><small>Ingreso de nuevo médico</small></h1></p></center>
<hr>

<form role="form" id="form" name="form" method="post" action="agregarMedico.php">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre">
  </div>
   <div class="form-group">
    <label for="apellido1">Primer Apellido</label>
    <input name="apellido1" type="text" class="form-control" id="apellido1" placeholder="Ingrese el primer apellido">
  </div>
  <div class="form-group">
    <label for="apellido2">Segundo Apellido</label>
    <input name="apellido2" type="text" class="form-control" id="apellido2" placeholder="Ingrese el segundo apellido">
  </div>
  <div class="form-group">
    <label for="direccion">Lugar de residencia</label>
    <input name="direccion" type="text" class="form-control" id="direccion" placeholder="Ingrese la dirección exacta de residencia">
  </div>
  <div class="row">
  	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <div class="form-group">
    <label for="telefono">Teléfono</label>
    <input name="telefono" type="text" class="form-control" id="telefono" placeholder="Digite un numero teléfonico">
  </div>
  </div>
  </div>
  <div class="row">
  	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
<div class="form-group">
    
    <label for="t_hospital_id_hospital">Seleccione una clínica</label>
           
      <SELECT NAME="t_hospital_id_hospital" class="form-control" id="t_hospital_id_hospital">
<option>Seleccione una Opción...</option>
<?php 
$conexion=mysql_connect("localhost","root","") or
die("Problemas en la conexion");
mysql_select_db("consultoriomedico",$conexion) or
die("Problemas en la selección de la base de datos");  

$clavebuscadah=mysql_query("SELECT id_hospital,nombre FROM t_hospital",$conexion) or
die("Problemas en el select:".mysql_error());
while($row = mysql_fetch_array($clavebuscadah))
{
echo'<OPTION VALUE="'.$row['id_hospital'].'">'.$row['nombre'].'</OPTION>';
}
 
?>
</SELECT>
      
  </div>

</div>
  </div>
   <div class="row">
  	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
<div class="form-group">
    
<label for="t_especialidad_id_especialidad">Seleccione una especialidad</label><SELECT NAME="t_especialidad_id_especialidad" class="form-control" id="t_especialidad_id_especialidad">
<option>Seleccione una especialidad</option>
<?php 
$conexion=mysql_connect("localhost","root","") or
die("Problemas en la conexion");
mysql_select_db("consultoriomedico",$conexion) or
die("Problemas en la selección de la base de datos");  

$clavebuscadah=mysql_query("SELECT id_especialidad,nombre FROM t_especialidad",$conexion) or
die("Problemas en el select:".mysql_error());
while($row = mysql_fetch_array($clavebuscadah))
{
echo'<OPTION VALUE="'.$row['id_especialidad'].'">'.$row['nombre'].'</OPTION>';
}
 
?>
</SELECT>      
      
      
  </div>

</div>
  </div>
   <hr>
<p> <center> <input type="submit" name="agregar" id="agregar" value="Agregar" />
<button class="btn btn-default"> <a href="configSistema.php">Volver </a></button></center>
</p>
</form>

</div>

		</div>


</div>



</div>



	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
<?php
session_start();
include("fondo.php");
include("Config/config.php");



?>





</body>
</html>