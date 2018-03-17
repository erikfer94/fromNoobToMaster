<?php
class Monstruo{
	const apariencia="FEO";
	public $ojos=2;
	public $color="verde";
	public $tamaño=null;
	private $escondite="abajo de la cama";
	private $poderes=array("Escupe fuego","Se hace invisible","come niños","escupe acido alv");
	private $hambre=false;
	private $tiempoSinComer=0;

	function __construct($ojos=2,$color="verde",$tamaño=null, $escondite="abajo de la cama",$poderes=array()){
		$this->ojos=$ojos;
		$this->color=$color;
		$this->tamaño=$tamaño;
		$this->escondite=$escondite;
		foreach ($poderes as $p => $poder) {
			$this->poderes[]=$poder;
		}
		if($tamaño>100)
		{
			$this->hambre=true;
		}
		echo "Ya se murieron todos alv";
	}
	function __destruct(){
		echo "<br/>Ya se murio mi monstruo :'(";
	}
	public function asusta($asustado=null)
	{
		if($asustado)
		{
			echo "<br/>$asustado: Ahhhhhhhhhhhhhhhhh!";
			return true;
		}
		return false;
	}
	public function comer($comida=null)
	{
		if($this->hambre&&$comida)
		{
			echo "<br/>Se comió a $comida";
			return true;
		}
		return false;
	}
	public function getPoderes(){
		foreach ($this->poderes as $p => $poder) {
			echo "<br/>".$poder;
		}
	}
	private function darHambre()
	{
		if($this->tiempoSinComer>1000)
		{
			$this->hambre=true;
		}
	}
}

$miMonstruo=new Monstruo(10,"Amarillo",100000,"En tu corazon",array("Control Mental"));
$miMonstruo->getPoderes();
$persona="Mi Novia";
$miMonstruo->asusta($persona);
$miMonstruo->comer($persona);
$miMonstruo=null;
?>