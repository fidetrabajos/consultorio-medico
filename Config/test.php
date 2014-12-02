<?php

	include "config.php";
	
//	$bd = new ConexionDB();
/*	$resultado = $bd->exec_query("SELECT * from prueba");
	
	while($row = mysqli_fetch_array($resultado)) {
	  echo $row['cantidad'] . " " . $row['nombre'];
	  echo "<br>";
	}
*/

	class Mono{

		public $prueba;
		public $mono;
		public $ojo;

	}
		
		
	/////////////////////////////////////
	
	//$ob = new t_hospital_Controlador();
	
	//$hospi = new t_hospital();
	
	//$hospi->id_hospital = 2;
	//$hospi->nombre = "Carlos Duran";
	//$hospi->telefono = "12222222";
	//$hospi->ubicacion = "Chepe";
	
	//$ob->Guardar($hospi);
	//$ob->Actualizar($hospi);
	
	//$hospita2 = $ob->ObtenerPorId(2);
	
	$especialidad = new t_especialidad();
	$especialidad->descripcion= "Cirujano";
	$especialidad->id_especialidad = 1;
	$especialidad->nombre = "House";
	
	$espeDAO = new t_especialidad_Controlador();
	$espeDAO->Guardar($especialidad);
	$espeDAO->ObtenerPorId(1);
?>
