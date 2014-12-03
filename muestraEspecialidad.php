<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consulta de especialidad</title>
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
<br>
<br>
<br>
<br>


<br>

<div class="container">


	
<div class="row ">
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	</div>
  <div class="row well">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
<center><p><h1><small>Consulta Nuestras Especialidades</small></h1></p></center>
<hr>

<div class="container">
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<form role="form" id="form" name="form" method="post" action="">

<h4>Selecciona la especilidad a consultar</h4>

  <select name="t_paciente_id_paciente" class="form-control" id="t_paciente_id_paciente">
        <option>...</option>
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
      </select>	
      
      
   <br>  
<center><input type="submit" name="b_buscar" id="b_buscar" value="Buscar" />
<button class="btn btn-default"> <a href="inicio.php">Volver </a></button>
</center>

</form>
<br>
<br>	



</div>
</div>






    
    
    </div>
</div>



</div>

</div>
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
<?php
		$consulta = "";
		if(isset($_POST['b_buscar'])){	
			$patron = trim($_POST['t_paciente_id_paciente']);
				
			$consulta = "SELECT t.id_especialidad,t.nombre,m.nombre,t.descripcion FROM t_especialidad t , t_medico m where m.t_especialidad_id_especialidad=t.id_especialidad and t.id_especialidad='$patron'";
				echo "<table id=\"tablaSocios\" width=\"1000px\" border=\"1\" >
				<tr>
					<th scope=\"col\" align=\"left\"><center>Codigo de especialidad</center></th>
					<th scope=\"col\" align=\"left\"><center>Nombre de la especialidad</center></th>
					<th scope=\"col\" align=\"left\"><center>Doctor a cargo</center></th>
					<th scope=\"col\" align=\"left\"><center>Descripcion</center></th>					
					</tr>";
				$resultado = mysql_query($consulta);
				$pos = 1;
				while($arreglo = mysql_fetch_array($resultado)){
					
					
					echo "<tr id=\"linea".$pos."\">	
						<td>".$arreglo['id_especialidad']."</td>
						<td>".$arreglo['nombre']."</td>
						<td>".$arreglo['nombre']."</td>
						<td>".$arreglo['descripcion']."</td>";
					
					$pos+= 1;
				
				}
				echo "</table>";
	
		}
	?>
    </div>
    </div>
    </div>

   


</div></div>

		</div>


</div>



</div>



	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
<?php
include("fondo.php");
include("Config/config.php");
?>



</body>
</html>