<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consulta de hospitales</title>
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


<br>



<div class="container">
	
<div class="row ">
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
<p><h1><small><center>Nuestros centros médicos</center></small></h1></p>

		<hr>
       
       <div class="container">
<div class="row">
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<form role="form" id="form" name="form" method="post" action="">

<h3>Donde  nos encontramos?</h3>

  <select name="t_paciente_id_paciente" class="form-control" id="t_paciente_id_paciente">
        <option>...</option>
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
      </select>	
      

  
<input type="submit" name="b_buscar" id="b_buscar" value="Buscar" />

</form>
<br>
<br>	



</div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <form action="EditaHospital.php" method="post"> 
<div align="center"> 

<b><h3>ID del registro a actualizar:</h3> </b></td> 
        
            <p align="center"><input type="text" name="id"></td> 
        
         
              <p align="center"> 
            <input type="submit" value="Editar" name="Editar"></td> 
     
        </form> 
 
</div>
       


</div>

</div>


	
<div class="row ">
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">



<?php
		$consulta = "";
		if(isset($_POST['b_buscar'])){	
			$patron = trim($_POST['t_paciente_id_paciente']);
				
			$consulta = "SELECT  id_hospital , nombre , telefono , ubicacion from t_hospital where   id_hospital='$patron'";
				echo "<table id=\"tablaSocios\" width=\"1000px\" border=\"1\" >
				<tr>
					<th scope=\"col\" align=\"left\"><center>Codigo de hospital</center></th>
					<th scope=\"col\" align=\"left\"><center>Centro Medico</center></th>
					<th scope=\"col\" align=\"left\"><center>Telefono</center></th>
					<th scope=\"col\" align=\"left\"><center>Ubicacion</center></th>

					</tr>";
				$resultado = mysql_query($consulta);
				$pos = 1;
				while($arreglo = mysql_fetch_array($resultado)){
					
					
					echo "<tr id=\"linea".$pos."\">	
						<td><center>".$arreglo['id_hospital']."</center></td>
						<td><center>".$arreglo['nombre']."</center></td>
						<td><center>".$arreglo['telefono']."</center></td>
						<td><center>".$arreglo['ubicacion']."</center></td>";
					
					$pos+= 1;
				
				}
				echo "</table>";
	
		}
	?>
     
   
     </div>       </div>      
        
        <br>
  <center><a href="index.php"> <button type="submit" class="btn btn-default">Volver</button></a></center>

		</div>


</div>



</div>



	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
<?php
include("fondo.php")


?>



</body>
</html>