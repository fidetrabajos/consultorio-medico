<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Citas Médicas</title>
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


<br>

<div class="container">


	
<div class="row ">
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="box-shadow2">
<center><p><h1><small>Cita Médica</small></h1></p></center>
<hr>

<form role="form" id="form" name="form" method="post" action="agregarCitaMedica.php">
  <div class="form-group">
    <label for="t_paciente_id_paciente">Paciente a atender</label>
    <select name="t_paciente_id_paciente" class="form-control" id="t_paciente_id_paciente">
        <option>...</option>
        <?php 
$conexion=mysql_connect("localhost","root","") or
die("Problemas en la conexion");
mysql_select_db("consultoriomedico",$conexion) or
die("Problemas en la selección de la base de datos");  

$clavebuscadah=mysql_query("SELECT id_paciente,nombre FROM t_paciente",$conexion) or
die("Problemas en el select:".mysql_error());
while($row = mysql_fetch_array($clavebuscadah))
{
echo'<OPTION VALUE="'.$row['id_paciente'].'">'.$row['nombre'].'</OPTION>';
}
 
?>
      </select>
  </div>
 <div class="form-group">
    
    <label for="t_medico_id_medico">Medico que atendió</label>
      <select name="t_medico_id_medico" class="form-control" id="t_medico_id_medico">
        <option>...</option>
       <?php 
$conexion=mysql_connect("localhost","root","") or
die("Problemas en la conexion");
mysql_select_db("consultoriomedico",$conexion) or
die("Problemas en la selección de la base de datos");  

$clavebuscadah=mysql_query("SELECT id_medico,nombre FROM t_medico where id_medico <> 5",$conexion) or
die("Problemas en el select:".mysql_error());
while($row = mysql_fetch_array($clavebuscadah))
{
echo'<OPTION VALUE="'.$row['id_medico'].'">'.$row['nombre'].'</OPTION>';
}
 
?>
      </select>
  </div>


  <div class="form-group">
    <label for="detalle_cita">Detalle de cita</label>
    <textarea name="detalle_cita" rows="6" class="form-control" id="detalle_cita"></textarea>
  </div>
  <div class="row">
  	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
 <div class="form-group">
    <label for="fecha">Fecha de atención</label>
    <input name="fecha" type="date" class="form-control" id="fecha" >
  </div>
  </div>
  </div>
 
  
   <hr>


<p><center> <input type="submit" name="agregar" id="agregar" value="Agregar" />

<script>
function myFunction() {
    alert("La cita se ha incluido en el expediente medico");
}
</script>
 
<button class="btn btn-default"> <a href="inicio.php">Volver </a></button></center></p>
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