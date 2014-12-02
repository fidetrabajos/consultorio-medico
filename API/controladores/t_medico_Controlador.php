<?php
	class t_medico_Controlador extends FideORM{
		
		public function __construct(){
			$this->nombreTabla = 't_medico';
			$this->llavePrimaria = 'id_medico';
			$this->obtenerNombreColumnas();
		}		
		
	}

?>