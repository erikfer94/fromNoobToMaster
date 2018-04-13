<?php
class MiExcepcion extends Exception{

}
class TestException{
	public $excepciones=null;
	function __construct(){
		$this->excepciones=new MiExcepcion;
	}
	private function dividir($a,$b)
	{
		if((int) $b===0)
		{
			throw new $this->excepciones("No se puede dividir entre 0");
			
		}
		return $a/$b;
	}
	public function doDivision($a,$b)
	{
		$resultado=0;
		try {
			$resultado=$this->dividir($a,$b);
		} catch (Exception $e) {
			echo $e->getMessage()."<br/>";
		}
		finally{
			echo $resultado."<br/>";
		}
	}
}

$test=new TestException;
$test->doDivision(10,2);
$test->doDivision(5,0);
?>