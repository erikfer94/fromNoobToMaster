<?php
$a=true;
$b=false;
var_dump(!$b);  	//true
var_dump($a and $b);	//false
var_dump($a or $b);	//true
var_dump($a xor $b);	//false solo un verdadero es and pero con negativos
var_dump($a && $a);	//true
var_dump($b || $b);	//false
?>