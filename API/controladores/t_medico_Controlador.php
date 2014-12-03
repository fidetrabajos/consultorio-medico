<?php
	class t_medico_Controlador extends FideORM{
		
		public function __construct(){
			$this->nombreTabla = 't_medico';
			$this->llavePrimaria = 'id_medico';
			$this->obtenerNombreColumnas();
		}

		public function IniciarSesion($email, $password){
			$usuario = $this->ObtenerPorColumna('password', md5($password));
			if($usuario){
				$sesion = new sessionManager();
				$sesion->iniciarSesion($usuario->email, $usuario->id_medico);
				return true;
			} else{
				return false;
			}
		}		
	}

?>