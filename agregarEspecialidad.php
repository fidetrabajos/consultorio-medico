<meta http-equiv="refresh" content="3;URL=IngresaEspecializacion.php"/> 

<?php      
    include("fondo.php");
    include("Config/config.php");
    
    $sesion = new sessionManager();
    $sesion->validarSesion();
	
	$espeDAO = new t_especialidad_Controlador();
	$especialidad = new t_especialidad();


	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];


	$especialidad->id_especialidad = "";
	$especialidad->nombre =$nombre;
	$especialidad->descripcion = $descripcion;


	$espeDAO->Guardar($especialidad);
	$espeDAO->Actualizar($especialidad);
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<center>La especialidad se ha guardado con exito </center>";
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<center>Por favor espere<center>";
	
?>


