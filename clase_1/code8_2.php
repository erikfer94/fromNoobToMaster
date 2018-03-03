<?php
echo "<pre>";
$bar=array();
for($i=0; $i<10; $i++)
{
	$bar[]="Variable $i";
}
$bar[]="OtroElemento nada mas porque si";#agrega en la posicion que sigue
$bar[2]=5.4;#agrega en la posicion que se indica
var_dump($bar);
echo "</pre>";
?>