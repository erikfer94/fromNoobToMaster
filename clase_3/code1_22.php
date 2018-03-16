<?php
class Ejemplo{
	public $valor=1;
}
$a=new Ejemplo;
$b=$a;
$b->valor=2;
echo $a->valor;
$c=new Ejemplo;
echo $c->valor;
$d=&$c;
$d->valor=2;
echo $c->valor;
$e=new Ejemplo;
function ejemplo($obj){
	$obj->valor=2;
}
ejemplo($e);
echo $e->valor;
?>