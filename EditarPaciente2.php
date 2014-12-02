 <meta http-equiv="Refresh" content="3;URL=ConsultaPacientes.php" /> 

<?php


include("fondo.php");
include("Config/config.php");
	
	
	$conexion=mysql_connect("localhost","root","") or
die("Problemas en la conexion");
mysql_select_db("consultoriomedico",$conexion) or
die("Problemas en la selección de la base de datos"); 
	

	$id = $_POST['id']; 
	
 
	$nombre = $_POST['nombre']; 
	$apellido1 = $_POST['apellido1']; 
	$apellido2 = $_POST['apellido2']; 
	$telefono = $_POST['telefono']; 
	$direccion = $_POST['direccion']; 
	$sintoma = $_POST['sintoma']; 
	$fecha = $_POST['fecha']; 
 

	
		if ($nombre!='' && $telefono !='' ){
		
		$consulta= /*"Update consultoriomedico.t_medico Set nombre='$nombre',apellido1='$apellido1',apellido2='$apellido2',telefono='$telefono',direccion='$direccion',t_especialidad_id_especialidad='$especialidad',t_hospital_id_hospital='$hospital' where id_medico='$id'"; */
	
	"Update consultoriomedico.t_paciente Set nombre='$nombre',apellido1='$apellido1',apellido2='$apellido2',telefono='$telefono',direccion='$direccion',sintoma='$sintoma',fecha='$fecha' where id_paciente='$id'";
	 
	mysql_query($consulta,$conexion); 
	
	
	echo " 
	 	<p>&nbsp;</p>
  		<p>&nbsp;</p>
   		<p>&nbsp;</p>
		<h2>Los datos han sido actualizados con exito.</h2>
	"; 	
			
			}
			else {
		echo "Todos los campos deben contener datos";
		echo "<br>";
		echo  $nombre;
				echo "<br>";
		echo  $telefono;
				
		
					
		 };
			
			
	
?> 
