<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consulta de médicos</title>
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

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
<p><h1><small><center>Nuestro Personal</center></small></h1></p>
<br>
<div class="container">
<div class="row">
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		
  </div>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<form role="form" id="form" name="form" method="post" action="">

<h3>Consulta de personal</h3>

  <select name="t_paciente_id_paciente" class="form-control" id="t_paciente_id_paciente">
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
      
      
   <br>  
<input type="submit" name="b_buscar" id="b_buscar" value="Buscar" />
<button class="btn btn-default"> <a href="configSistema.php">Volver </a></button>
</form>
<p><br>
  <?php
		$consulta = "";
		if(isset($_POST['b_buscar'])){	
			$patron = trim($_POST['t_paciente_id_paciente']);
				
$consulta = "select m.id_medico,m.nombre,m.apellido1,m.apellido2,m.telefono,m.direccion,e.nombre as especialidad,h.nombre as hospital from t_medico m , t_especialidad e , t_hospital h where m.t_especialidad_id_especialidad=e.id_especialidad and m.t_hospital_id_hospital = h.id_hospital and m.id_medico='$patron'";
				echo "<table id=\"tablaSocios\" width=\"1000px\" border=\"1\" >
				<tr>
									<th scope=\"col\" align=\"left\"><center># de Identificación</center></th>
					<th scope=\"col\" align=\"left\"><center>Nombre</center></th>
					<th scope=\"col\" align=\"left\"><center>Primer Apellido</center></th>
					<th scope=\"col\" align=\"left\"><center>Segundo Apellido</center></th>
					<th scope=\"col\" align=\"left\"><center>Telefono</center></th>
					<th scope=\"col\" align=\"left\"><center>Direccion</center></th>
					<th scope=\"col\" align=\"left\"><center>Especialidad</center></th>
					<th scope=\"col\" align=\"left\"><center>Hospital</center></th>

					</tr>";
				$resultado = mysql_query($consulta);
				$pos = 1;
				while($arreglo = mysql_fetch_array($resultado)){
					
					
					echo "<tr id=\"linea".$pos."\">	
						<td><center>".$arreglo['id_medico']."</center></td>
						<td><center>".$arreglo['nombre']."</center></td>
						<td><center>".$arreglo['apellido1']."</center></td>
						<td><center>".$arreglo['apellido2']."</center></td>
						<td><center>".$arreglo['telefono']."</center></td>
						<td><center>".$arreglo['direccion']."</center></td>
						<td><center>".$arreglo['especialidad']."</center></td>
						<td><center>".$arreglo['hospital']."</center></td>"					
						
						;
					
					$pos+= 1;
				
				}
				echo "</table>";
	
		}
	?>
  </p>

<p>&nbsp;</p>
<p><br>
</p>	



</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

        <form action="EditaMedico.php" method="post"> 
<div align="center"> 

<b><h3>ID del registro a actualizar:</h3> </b></td> 
        
            <p align="center"><input type="text" name="id"></td> 
        
         
              <p align="center"> 
            <input type="submit" value="Editar" name="Editar"></td> 
     
        </form> 
 
</div> 


</div>






    
    
    </div>

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