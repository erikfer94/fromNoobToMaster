<?php
class vehiculo{

	public $usaRuedas=true;
	public $medio="terrestre";
	public $ruedas=4;
	public $motor=true;
	public $pasajeros=5;

	public function encender(){
		echo "Movemos la llave<br/>";
	}

	public function acelerar(){
		echo "Pisamos el acelerador<br/>";
	}
	public function getRuedas(){
		if($this->usaRuedas)
		{
			return $this->ruedas;
		}
		return 0;
	}

}
?>