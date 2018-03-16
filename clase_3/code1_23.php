<?php
class Ejemplo{
	public $valor=1;
}
$a=new Ejemplo;
echo $a->valor;
$a->valor=2;
$b=clone $a;
echo $a->valor;
echo $b->valor;
$b->valor=3;
echo $a->valor;
echo $b->valor;
?>