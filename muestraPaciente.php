<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuestros Clientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="css/index.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>
<?php
include("fondo.php");
    include("Config/config.php");
    
    $sesion = new sessionManager();
    $sesion->validarSesion();
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


		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
<p><h1><small><center>Nuestros pacientes</center></small></h1></p>

	
<div class="container">
	
<div class="row ">
<br>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 well">
		  <form role="form" id="form" name="form" method="post" action="">
		  <h3>Consulta de personal</h3>

  <select name="id_paciente" class="form-control" id="id_paciente">
        <option>...</option>
        <?php 
$conexion=mysql_connect("localhost","root","") or
die("Problemas en la conexion");
mysql_select_db("consultoriomedico",$conexion) or
die("Problemas en la selección de la base de datos");  

$clavebuscadah=mysql_query("SELECT id_paciente, CONCAT (nombre,' ',apellido1,' ',apellido2) as nombreC FROM t_paciente",$conexion) or
die("Problemas en el select:".mysql_error());
while($row = mysql_fetch_array($clavebuscadah))
{
echo'<OPTION VALUE="'.$row['id_paciente'].'">'.$row['nombreC'].'</OPTION>';
}
 
?>
      </select>	
      
      
   <br>  
<input type="submit" name="b_buscar" id="b_buscar" value="Buscar" />
<button class="btn btn-default"> <a href="index.php">Volver </a></button>
<br>

</form> </div>
</div></div>



<p><br>
  <?php
		$consulta = "";
		if(isset($_POST['b_buscar'])){	
	    $patron = trim($_POST['id_paciente']);
				
$consulta = "SELECT p.id_paciente,p.nombre as nombrePaciente,p.apellido1,p.apellido2,p.telefono,p.direccion,p.sintoma,p.fecha,m.nombre as nombreMedico FROM t_paciente p , t_medico m WHERE p.t_medico_id_medico=m.id_medico and p.id_paciente='$patron'";

				echo "<center><table id=\"tablaSocios\" width=\"1000px\" border=\"1\" </center>>
				<tr>
					<th scope=\"col\" align=\"left\"><center>Codigo Cliente</center></th>
					<th scope=\"col\" align=\"left\"><center>Nombre</center></th>
					<th scope=\"col\" align=\"left\"><center>Primer Apellido</center></th>
					<th scope=\"col\" align=\"left\"><center>Segundo Apellido</center></th>
					<th scope=\"col\" align=\"left\"><center>Telefono</center></th>
					<th scope=\"col\" align=\"left\"><center>Direccion</center></th>
					<th scope=\"col\" align=\"left\"><center>Sintomas</center></th>
					<th scope=\"col\" align=\"left\"><center>Fecha de Atencion</center></th>
					<th scope=\"col\" align=\"left\"><center>Medico a atender</center></th>

					</tr>";
				$resultado = mysql_query($consulta);
				$pos = 1;
				while($arreglo = mysql_fetch_array($resultado)){
					
					
					echo "<tr id=\"linea".$pos."\">	
						<td><center>".$arreglo['id_paciente']."</center></td>
						<td><center>".$arreglo['nombrePaciente']."</center></td>
						<td><center>".$arreglo['apellido1']."</center></td>
						<td><center>".$arreglo['apellido2']."</center></td>
						<td><center>".$arreglo['telefono']."</center></td>
						<td><center>".$arreglo['direccion']."</center></td>
						<td><center>".$arreglo['sintoma']."</center></td>
						<td><center>".$arreglo['fecha']."</center></td>						
						<td><center>".$arreglo['nombreMedico']."</center></td>"					
						
						;
					
					$pos+= 1;
				
				}
				echo "</table>";
	
		}
	?>
  </p>
               
               
       
 
</div>
</div>
</div>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>