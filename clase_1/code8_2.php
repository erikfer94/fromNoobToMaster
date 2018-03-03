<?php
echo "<pre>";
$bar=array();
for($i=0; $i<10; $i++)
{
	$bar[]="Variable $i";
}
$bar[]="no se lo que quieres caca";
$bar[]=1;
var_dump($bar);
echo "</pre>";
?>