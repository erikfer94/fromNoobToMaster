<?php
require_once "code1_7.php";

class automovil extends vehiculo{

}

class bicicleta extends vehiculo{

	function __construct(){
		$this->ruedas=2;
		$this->motor=false;
		$this->pasajeros=1;
	}

	public function encender(){
		return false;
	}
	public function acelerar(){
		echo "Pedaleale carnal<br/>";
	}
}
/*Defina aqui la clase Submarino*/
?>