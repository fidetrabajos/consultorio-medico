<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Expediente Médico</title>
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
<center><p><h1><small>Expediente Médico</small></h1></p></center>
<hr>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<div class="box-shadow2">

<form role="form" id="form" name="form" method="post" action="">

<h4>  Seleccione el paciente a consultar</h4>

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
<p><center> <input type="submit" name="b_buscar" id="b_buscar" value="Buscar" />
<button class="btn btn-default"> <a href="configSistema.php">Volver </a></button></center></p>
</form> 

</div>

</div>




<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <form action="EiminarCita.php" method="post"> 
<div align="center"> 

<b><h4>Ingrese el ID a eliminar:</h4> </b></td> 
        
            <p align="center"><input type="text" name="id"></td> 
        
         
              <p align="center"> 
              <br>
              <br>
            <input type="submit" value="Eiminar" name="Eiminar"></td> 
     
        </form> 
 
</div></div>


</div>
</div>
</div>
</div>

<div class="container">
  <div class="row ">
    <BR>
 
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

<p><br>

  <center><?php
		$consulta = "";
		if(isset($_POST['b_buscar'])){	
	    $patron = trim($_POST['id_paciente']);
				
$consulta = "select c.id_cita , e.fecha , p.nombre as paciente , m.nombre as doctor , e.detalle_expediente from t_expediente e, t_medico m , t_paciente p , t_cita_medica c  where e.t_medico_id_medico=m.id_medico and e.t_paciente_id_paciente=p.id_paciente and e.t_cita_medica_id_cita = c.id_cita and e.t_paciente_id_paciente ='$patron' group by e.id_expediente  ";

				echo "<center><table id=\"tablaSocios\" width=\"1000px\" border=\"1\" </center>>
				<tr>
					<th scope=\"col\" align=\"left\"><center>Codigo de la Cita</center></th>
					<th scope=\"col\" align=\"left\"><center>Fecha de Atecion</center></th>
					<th scope=\"col\" align=\"left\"><center>Paciente</center></th>
					<th scope=\"col\" align=\"left\"><center>Doctor</center></th>
					<th scope=\"col\" align=\"left\"><center>Detalle de atencion</center></th>

					</tr>";
				$resultado = mysql_query($consulta);
				$pos = 1;
				while($arreglo = mysql_fetch_array($resultado)){
					
					
					echo "<tr id=\"linea".$pos."\">	
						<td><center>".$arreglo['id_cita']."</center></td>
						<td><center>".$arreglo['fecha']."</center></td>
						<td><center>".$arreglo['paciente']."</center></td>
						<td><center>".$arreglo['doctor']."</center></td>
						<td><center>".$arreglo['detalle_expediente']."</center></td>"					
						
						;
					
					$pos+= 1;
				
				}
				echo "</table>";
	
		}
	?></center>
    
  </p>



</div>
</div>





</div>










<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<?php
session_start();
include("fondo.php")


?>



</body>
</html>