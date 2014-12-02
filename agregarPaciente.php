<meta http-equiv="refresh" content="3;URL=inicio.php"/>

<?php
	include ("Config/config.php");
	include ("fondo.php");

	$ob = new t_paciente_Controlador();
	$paci = new t_paciente();



	$nombre= $_POST['nombre'];
	$apellido1= $_POST['apellido1'];
	$apellido2= $_POST['apellido2'];
	$telefono= $_POST['telefono'];
	$direccion= $_POST['direccion'];
	$sintoma= $_POST['sintoma'];
	$fecha= $_POST['fecha'];
	$t_medico_id_medic= 5;
					
	

	$paci->id_paciente = "";
	$paci->nombre =$nombre;
	$paci->apellido1 =$apellido1;
	$paci->apellido2 = $apellido2;
	$paci->telefono = $telefono;
	$paci->direccion = $direccion;
	$paci->sintoma = $sintoma;
	$paci->fecha = $fecha;
	$paci->t_medico_id_medico = $t_medico_id_medic;
	

	if ($nombre!='' && $apellido1 !='' && $apellido2!='' && $telefono!='' && $direccion!='' && $sintoma!='' && $fecha!='' && $t_medico_id_medic!='' ){
	$ob->Guardar($paci);
	$ob->Actualizar($paci);
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  

	echo "<center>La solicitud de su cita de a tramitado con exito</center>";
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<center>Por favor espere<center>";
	}else {
		echo "Todos los campos deben contener datos";
		echo "<br>";
		echo  $nombre;
				echo "<br>";
		echo  $apellido1 ;
				echo "<br>";
		echo $apellido2 ;
				echo "<br>";
		echo $telefono;
				echo "<br>";
		echo $direccion;
				echo "<br>";
		echo $sintoma;
				echo "<br>";
		echo $fecha;
				echo "<br>";
		echo $t_medico_id_medic;

		
		 };
	
?>
