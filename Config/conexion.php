<?php

class ConexionDB{

	private $dbHost = "localhost";
	private $dbUser = "root";
	private $dbPass = "";
	private $dbName ="consultoriomedico";
	private $link = '';
		
	public function __construct(){
			$this->conectar();
	}	
	
	private function conectar(){
		$this->link = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName)  or die("Error " . mysqli_error($link));
	}
	
	public function exec_query($query){
		$query = $query or die("Error en la consulta. " . mysqli_error($this->link));
		$resultado = $this->link->query($query);
		
		return $resultado;	
	}
}
?>