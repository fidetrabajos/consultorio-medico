<?php
	class t_paciente_Controlador extends FideORM{
		
		public function __construct(){
			$this->nombreTabla = 't_paciente';
			$this->llavePrimaria = 'id_paciente';
			$this->obtenerNombreColumnas();
		}		
		
	}

?>