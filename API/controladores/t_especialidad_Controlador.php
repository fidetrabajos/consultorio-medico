<?php
	class t_especialidad_Controlador extends FideORM{
		
		public function __construct(){
			$this->nombreTabla = 't_especialidad';
			$this->llavePrimaria = 'id_especialidad';
			$this->obtenerNombreColumnas();
		}		
		
	}

?>