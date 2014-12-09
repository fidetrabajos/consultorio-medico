<meta http-equiv="refresh" content="3;URL=IngresaCitaMedica.php"/> 

<?php
	include ("Config/config.php");
	include ("fondo.php");
    
    $sesion = new sessionManager();
    $sesion->validarSesion();
	$ob = new t_cita_medica_Controlador();
	$cita = new t_cita_medica();
	
	$obExpe = new t_expediente_Controlador();
	$expe = new t_expediente();


	$fecha= $_POST['fecha'];
	$detalle_cita= $_POST['detalle_cita'];
	$t_medico_id_medico= $_POST['t_medico_id_medico'];
	$t_paciente_id_paciente= $_POST['t_paciente_id_paciente'];
	
					
	

	$cita->id_cita = "";
	$cita->fecha =$fecha;
	$cita->detalle_cita =$detalle_cita;
	$cita->t_medico_id_medico = $t_medico_id_medico;
	$cita->t_paciente_id_paciente = $t_paciente_id_paciente;
	
	if ($fecha!='' && $detalle_cita !='' && $t_medico_id_medico!='' && $t_paciente_id_paciente!='' ){
	$ob->Guardar($cita);
	$ob->Actualizar($cita);
	
	$expe->id_expediente= "";
	$expe->fecha=$fecha;
	$expe->detalle_expediente=$detalle_cita;
	$expe->t_medico_id_medico =$t_medico_id_medico;
	$expe->t_paciente_id_paciente= $t_paciente_id_paciente;
	$expe->t_cita_medica_id_cita=$ob->ObtenerIdMax();
	
	$obExpe->Guardar($expe);
	$obExpe->Actualizar($expe);
	
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  

	echo "<center>Se a agregado la cita al expediente cliente</center>";
	echo "<br>";  
	echo "<br>";  
	echo "<br>";  
	echo "<center>Por favor espere<center>";
	}else {
		echo "Todos los campos deben contener datos";
		echo "<br>";
		echo  $fecha;
				echo "<br>";
		echo  $detalle_cita ;
				echo "<br>";
		echo $t_medico_id_medico ;
				echo "<br>";
		echo $t_paciente_id_paciente;
					
		 };
	
?>