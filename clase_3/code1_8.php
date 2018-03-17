<?php
require_once "code1_7.php";

class automovil extends vehiculo{
	public function encender()
	{
		echo "Puchale al boton";
	}

}

class bicicleta extends vehiculo{

	function __construct(){
		$this->ruedas=2;
		$this->motor=false;
		$this->pasajeros=5;
	}

	public function encender(){
		return false;
		
	}
	public function acelerar(){
		echo "pedalea<br/>";
	}
}
 class submarino extends vehiculo{
	public $armaNuclear=true;
	public $medio="agua";
	public $usaRuedas=false;
	public $pasajeros="n";
	}
	public function encender(){
		
		echo "juntamos los cables</br>";
	}
	public function acelerar(){
		echo "Rema exclavo<br/>";
	}

	}
}
?>