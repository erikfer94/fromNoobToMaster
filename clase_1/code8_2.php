<?php
echo "<pre>";
$bar=array();
for($i=0; $i<10; $i++)
{
	$bar[]="Variable $i";
}
$bar[]= "otro elemento nomas por que si ";

var_dump($bar);
echo "</pre>";
?>