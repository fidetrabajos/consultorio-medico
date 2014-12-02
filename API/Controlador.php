<?php
	function CargarRecursos(){
		$includes = array(
		   'modelos/t_hospital.php',
			'modelos/t_cita_medica.php',
			'modelos/t_especialidad.php',
			'modelos/t_expediente.php',
			'modelos/t_medico.php',
			'modelos/t_paciente.php',	   
			'controladores/t_cita_medica_Controlador.php',
			'controladores/t_hospital_Controlador.php',
			'controladores/t_especialidad_Controlador.php',
			'controladores/t_expediente_Controlador.php',
			'controladores/t_medico_Controlador.php',
			'controladores/t_paciente_Controlador.php'
		);
		
		foreach($includes as $file) {
			 include_once $file;
		}
	}
	CargarRecursos();
?>
