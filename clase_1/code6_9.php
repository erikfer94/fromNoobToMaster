<?php
$a=true;
$b=false;
var_dump(!$b);  	//true
echo "<br/>";
var_dump($a and $b);	//falseecho "<br/>";
echo "<br/>";
var_dump($a or $a);	//true
echo "<br/>";
var_dump($a xor $a);	//false
echo "<br/>";
var_dump($a xor $b); 	#true
echo "<br/>";
var_dump($a && $a);	//true
echo "<br/>";
var_dump($b || $b);	//false
?>