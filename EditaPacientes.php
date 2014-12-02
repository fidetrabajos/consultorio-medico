<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar médico</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="css/index.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>
<?php
session_start();
include("Config/config.php");
include("fondo.php")
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

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
<p><h1><small><center>
Nuestros Pacientes
</center></small></h1></p>
<br>
<div class="container">
<div class="row">
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
		
  </div>

<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
<?php  

$conexion=mysql_connect("localhost","root","") or
die("Problemas en la conexion");
mysql_select_db("consultoriomedico",$conexion) or
die("Problemas en la selección de la base de datos"); 

$id = $_POST['id']; 

	$query = /*"select m.id_medico,m.nombre,m.apellido1,m.apellido2,m.telefono,m.direccion,e.nombre as especialidad,h.nombre as hospital from t_medico m , t_especialidad e , t_hospital h where m.t_especialidad_id_especialidad=e.id_especialidad and m.t_hospital_id_hospital = h.id_hospital and m.id_medico = '$id'"; */
	"select nombre,apellido1,apellido2,telefono,direccion,sintoma,fecha from t_paciente where id_paciente = '$id'";
	

    $result = mysql_query($query,$conexion); 
	
	
	


	
	
while($registro = mysql_fetch_array($result)){
	echo " <center>
	 <p>&nbsp;</p>
  <p>&nbsp;</p>
   <p>&nbsp;</p>
    <table border='0'> 
        <tr> 
         <td colspan='2'><h3>Actualice los datos que considere necesario</h3></td> 
        </tr> 
        <form method='POST' action='EditarPaciente2.php'> 
        <tr> 
            <td width='50%'>&nbsp;</td> 
            <td width='50%'>&nbsp;</td> 
        </tr> 
        <tr> 
            <td width='50%'><p ><b><h4>Nombre del Paciente: </h4></b></td> 
            <td width='50%'><p ><input type='text' name='nombre' size='20' value='".$registro['nombre']."'></td> 
        </tr> 
        <tr> 
            <td width='50%'><p ><b><h4>Primer Apellido</h4></b></td> 
            <td width='50%'><p ><input type='text' name='apellido1' size='20' value='".$registro['apellido1']."'></td> 
        </tr> 
		 <tr> 
            <td width='50%'><p ><b><h4>Segundo Apellido</h4></b></td> 
            <td width='50%'><p ><input type='text' name='apellido2' size='20' value='".$registro['apellido2']."'></td> 
        </tr> 
		<td width='50%'><p ><b><h4>Telefono</h4></b></td> 
            <td width='50%'><p ><input type='text' name='telefono' size='20' value='".$registro['telefono']."'></td> 
        </tr> 
		<td width='50%'><p ><b><h4>Direccion</h4></b></td> 
            <td width='50%'><p ><input type='text' name='direccion' size='20' value='".$registro['direccion']."'></td> 
        </tr> 
		<td width='50%'><p ><b><h4>Sintoma</h4></b></td> 
            <td width='50%'><p ><input type='text' name='sintoma' size='20' value='".$registro['sintoma']."'></td> 
        </tr> 
		<td width='50%'><p ><b><h4>Fecha de Ingreso</h4></b></td> 
            <td width='50%'><p ><input type='date' name='fecha' size='20' value='".$registro['fecha']."'></td> 
        </tr> 
       
            <td width='50%'>&nbsp;</td> 
            <td width='50%'>&nbsp;</td> 
        </tr> 
        <input type='hidden' name='id' value='$id'> 
        <tr> 
            <td width='100%' colspan='2'> 
            <p > 
            <input type='submit' value='Actualizar datos' name='B1'></td> 
        </tr> 
        </form> 
    </table> </center>
"
;}
?> 



</div>


</div>




  <center><a href="ConsultaPacientes.php"> <button type="submit" class="btn btn-default">Volver</a></button></center>

    
    
    </div>

</div>
</div>
</div>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>