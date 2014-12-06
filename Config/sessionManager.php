<?php

class sessionManager{

	public function __construct(){
		session_start();
	}

	public function iniciarSesion($email, $id){
		$_SESSION['email'] = $email;
		$_SESSION['userId'] = $id; 
	}

	public function existeSesion(){
		if(isset($_SESSION['email'])){
			return true;
		} else{
			return false;
		}
	}

	public function validarSesion(){
		if(!$this->existeSesion()){
			header('Location: index.php');
		}
	}
}

?>