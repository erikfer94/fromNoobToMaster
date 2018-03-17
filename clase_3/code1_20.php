<?php
trait ClaseBase{
	function hacerecho(){
		echo "HOLA";
	}
	function sumar($a,$b){
		echo $a+$b;
	}
}
class Ejemplo{
	use ClaseBase;
}
class Ejemplo2{
	use ClaseBase;
	function hacerecho(){
		echo "MUNDO";
	}
}

$ejemplo=new Ejemplo;
$ejemplo2=new Ejemplo2;
$ejemplo->hacerecho();
$ejemplo->sumar(3,4);
$ejemplo2->hacerecho();
$ejemplo2->sumar(5,6);
?>