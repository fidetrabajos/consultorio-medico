 <meta http-equiv="Refresh" content="2;URL=ConsultaEspecialidad.php" /> 

<?php


include("fondo.php");
    include("Config/config.php");
    
    $sesion = new sessionManager();
    $sesion->validarSesion();
	
	
	$conexion=mysql_connect("localhost","root","") or
die("Problemas en la conexion");
mysql_select_db("consultoriomedico",$conexion) or
die("Problemas en la selección de la base de datos"); 
	

	$id = $_POST['id']; 
	
 
	$nombre = $_POST['nombre']; 
	$descripcion = $_POST['descripcion']; 

	
		if ($nombre!='' && $descripcion !='' ){
		
		$consulta= /*"Update consultoriomedico.t_medico Set nombre='$nombre',apellido1='$apellido1',apellido2='$apellido2',telefono='$telefono',direccion='$direccion',t_especialidad_id_especialidad='$especialidad',t_hospital_id_hospital='$hospital' where id_medico='$id'"; */
	
	"Update consultoriomedico.t_especialidad Set nombre='$nombre',descripcion='$descripcion' where id_especialidad='$id'";
	 
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
		echo  $descripcion ;
				
		
					
		 };
			
			
	
?> 
