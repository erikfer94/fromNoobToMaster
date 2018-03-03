<?php
echo "<pre>";
$bar=array();
for($i=0; $i<10; $i++)
{
	$bar[]="Variable $i";
}
$bar[]="Otro elemento nada mas porque si";
$bar[2]=5.4;
var_dump($bar);
echo "</pre>";
?>