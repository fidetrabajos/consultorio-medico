 <meta http-equiv="Refresh" content="2;URL=ExpedienteMedico.php" /> 

<?php


include("fondo.php");
    include("Config/config.php");
    
    $sesion = new sessionManager();
    $sesion->validarSesion();
	
	
	$conexion=mysql_connect("localhost","root","") or
die("Problemas en la conexion");
mysql_select_db("consultoriomedico",$conexion) or
die("Problemas en la selección de la base de datos"); 
	

	$id =$_POST['id']; 
	


	
	
		
		$consulta= "delete from consultoriomedico.t_expediente where t_expediente.t_cita_medica_id_cita = $id";
		
		/*"Update consultoriomedico.t_medico Set nombre='$nombre',apellido1='$apellido1',apellido2='$apellido2',telefono='$telefono',direccion='$direccion',t_especialidad_id_especialidad='$especialidad',t_hospital_id_hospital='$hospital' where id_medico='$id'"; */
	

	 
	mysql_query($consulta,$conexion); 
	
	
	echo " 
	 	<p>&nbsp;</p>
  		<p>&nbsp;</p>
   		<p>&nbsp;</p>
		<h2>Los datos han sido borrados con exito.</h2>
	"; 	
			
			
			
			
	
?> 
