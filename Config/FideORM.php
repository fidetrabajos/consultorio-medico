<?php

	class FideORM{
		
		protected $nombreTabla;
		protected $llavePrimaria;
		protected $nombreColumnas;
		
		public function __construct(){
			
		}	

		private function obtenerPropiedades($objeto){
			return get_object_vars($objeto);
		}

		private function generarObjeto()
		{
			$objeto = new $this->nombreTabla();
			return $objeto;
		}
		
		public function obtenerNombreColumnas(){
			$objeto = $this->generarObjeto();
			$this->nombreColumnas = array_keys($this->obtenerPropiedades($objeto));	
		}

		private function ExtraerValoresObjecto($objeto){
			
			$valores = '';
			$cont = 0;
			$indexObjeto = count($this->nombreColumnas);
			
			foreach($objeto as $llave => $valor) {
				
				if(is_string($valor)){
					$valores = $valores."'".$valor."'";
				}else{
					$valores = $valores.$valor;
				}
				
				if(($cont + 1) < $indexObjeto){
					$valores = $valores.",";
				}
								
				$cont++;
		    }
			
			return $valores;	
		}
		
		private function ObtenerTextoColumnas(){
			
			$columnas = '';
			foreach($this->nombreColumnas as $index=>$columna){
				if(($index + 1) < sizeof($this->nombreColumnas)){
					$columnas = $columnas. $columna.', ';
				}
				else{
					$columnas = $columnas. $columna;	
				}
			}
			
			return $columnas;
		}
		
		private function RellenarObjeto($datos){
			
			if(count($datos)){
				$objeto = $this->generarObjeto();
				foreach($objeto as $index=>&$propiedad){
					$propiedad = $datos[$index];
				}
				return $objeto;
			} else{
				return null;
			}
		}
		
		public function ObtenerTodos(){
			
			$query = '';
			$columnas = $this->ObtenerTextoColumnas();
			
			$query ='select '.$columnas.' from '.$this->nombreTabla;
			
			$bd = new ConexionDB();
			$resultado = $bd->exec_query($query);
			$objetos = array();
			
			while($row = $resultado->fetch_assoc()) {
				$objetos[count($objetos)] = $row;
			}
			
			return $objetos;
		}
		
		public function ObtenerPorColumna($columna, $valor){
			
			$query = '';
			$columnas = $this->ObtenerTextoColumnas();
			
			$query ='select '.$columnas.' from '.$this->nombreTabla.' where '.$columna.' = ';
			if(is_string($valor)){
				$query = $query."'".$valor."'";
			} else{
				$query = $query.$valor;
			}
			
			$bd = new ConexionDB();
			$resultado = $bd->exec_query($query);
			$row = mysqli_fetch_array($resultado);
			return $this->RellenarObjeto($row);
		}

		public function ObtenerPorId($id){
			
			$query = '';
			$columnas = $this->ObtenerTextoColumnas();
			
			$query ='select '.$columnas.' from '.$this->nombreTabla.' where '.$this->llavePrimaria.' = '.$id;
			
			$bd = new ConexionDB();
			$resultado = $bd->exec_query($query);
			$row = mysqli_fetch_array($resultado);
			return $this->RellenarObjeto($row);			 	
		}
		
		
		public function ObtenerIdMax(){
			
			$query = '';
			$columnas = $this->ObtenerTextoColumnas();
			
			$query ='SELECT MAX('.$this->llavePrimaria.') from '.$this->nombreTabla;

			$bd = new ConexionDB();
			$resultado = $bd->exec_query($query);
			$row = mysqli_fetch_array($resultado);
			return $row[0];
		} 
		
		public function Actualizar($objeto){
			
			$query = '';
			$valores = $this->ExtraerValoresObjecto($objeto);
			$llave = $this->llavePrimaria;
			$id = $objeto->$llave;
			
			$columnas = '';
			foreach($this->nombreColumnas as $index=>$columna){
				
				if(is_string($objeto->$columna)){
					$columnas = $columnas. $columna." = '".$objeto->$columna . "'";	
				}else{
					$columnas = $columnas. $columna.' = '.$objeto->$columna;	
				}				
				
				if(($index + 1) < sizeof($this->nombreColumnas)){
					$columnas = $columnas.', ';
				}
			}
			
			$query = 'UPDATE '.$this->nombreTabla.' SET '.$columnas.' WHERE '.$llave.'='.$id;
			$bd = new ConexionDB();
			$resultado = $bd->exec_query($query);
				
		}

		public function SerializarJSON($objeto){
			return json_encode($objeto);
		}

		public function InsertarJSON($nombre, $objeto){
			$lista = $this->SerializarJSON($objeto);
			echo "<script> var $nombre = $lista</script>";
		}
		
		public function Guardar($objeto){
			var_dump($objeto);
			$query = '';
			$columnas = $this->ObtenerTextoColumnas();
			$valores = $this->ExtraerValoresObjecto($objeto);
			
			$query = 'INSERT INTO '.$this->nombreTabla.' ('.$columnas.') VALUES ('.$valores.')';
			$bd = new ConexionDB();
			$resultado = $bd->exec_query($query);			
		}		
	}

?>