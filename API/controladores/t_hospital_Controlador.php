<?php
	class t_hospital_Controlador extends FideORM{
		
		public function __construct(){
			$this->nombreTabla = 't_hospital';
			$this->llavePrimaria = 'id_hospital';
			$this->obtenerNombreColumnas();
		}		
		
	}

?>