 <meta http-equiv="refresh" content="3;URL=IngresaMedico.php"/>

<?php      
    include("fondo.php");
    include("Config/config.php");
    
    $sesion = new sessionManager();
    $sesion->validarSesion();


	$ob = new t_medico_Controlador();
	$medi = new t_medico();


	 $nombre= $_POST['nombre'];
	 $apellido1= $_POST['apellido1'];
	 $apellido2= $_POST['apellido2'];
	 $telefono= $_POST['telefono'];
	 $direccion= $_POST['direccion'];
	 $t_especialidad_id_especialidad= $_POST['t_especialidad_id_especialidad'];
	 $t_hospital_id_hospital= $_POST['t_hospital_id_hospital'];
	
	

	$medi->id_medico = "";
	$medi->nombre =$nombre;
	$medi->apellido1 =$apellido1;
	$medi->apellido2 = $apellido2;
	$medi->telefono = $telefono;
	$medi->direccion = $direccion;
	$medi->t_especialidad_id_especialidad = $t_especialidad_id_especialidad;
	$medi->t_hospital_id_hospital = $t_hospital_id_hospital;
	

	$ob->Guardar($medi);
	$ob->Actualizar($medi);
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<center>Se ha incluido la información del médico con exíto </center>";
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<center>Por favor espere<center>";
	
?>


