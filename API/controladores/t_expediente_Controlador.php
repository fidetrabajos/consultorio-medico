<?php
	class t_expediente_Controlador extends FideORM{
		
		public function __construct(){
			$this->nombreTabla = 't_expediente';
			$this->llavePrimaria = 'id_expediente';
			$this->obtenerNombreColumnas();
		}		
		
	}

?>