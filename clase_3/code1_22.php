<?php
class perro{
	public $valor=1;
}
$a=new perro;
$b=$a;
$b->valor=2;
echo "El valor de a (el perro original)".$a->valor."<br/>";
$perroNuevo=new perro;
echo "El valor del perro nuevo (Juan) ". $perroNuevo->valor."<br/>";
$d=&$perroNuevo;
$d->valor=2;
echo "El valo del perro Juan pero ya manoseado ".$perroNuevo->valor."<br/>";
$tercerPerro=new perro;
function ejemplo($obj){
	$obj->valor=2;
}
ejemplo($tercerPerro);
echo "El valor del tercer Perro (otro Juan) despues de la funcion ejemplo ".$tercerPerro->valor;
?>