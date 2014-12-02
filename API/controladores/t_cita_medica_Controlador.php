<?php
	class t_cita_medica_Controlador extends FideORM{
		
		public function __construct(){
			$this->nombreTabla = 't_cita_medica';
			$this->llavePrimaria = 'id_cita';
			$this->obtenerNombreColumnas();
		}		
		
	}

?>