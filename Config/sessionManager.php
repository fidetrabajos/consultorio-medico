<?php

class sessionManager{

	public function iniciarSesion($email, $id){
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['userId'] = $id; 
	}

	public function existeSesion(){
		if(isset($_SESSION['email)'])){
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