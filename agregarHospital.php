 <meta http-equiv="refresh" content="3;URL=IngresaHospital.php"/>

<?php
	include ("Config/config.php");
	include ("fondo.php");

	$ob = new t_hospital_Controlador();
	$hospi = new t_hospital();

	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$ubicacion = $_POST['ubicacion'];

	$hospi->id_hospital = "";
	$hospi->nombre =$nombre;
	$hospi->telefono =$telefono;
	$hospi->ubicacion = $ubicacion;

	$ob->Guardar($hospi);
	$ob->Actualizar($hospi);
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


