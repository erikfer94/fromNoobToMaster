<?php
$a=3;
$b=4;
$c="3";
$d="4";
var_dump($a==$c);  	//true  igual
var_dump($a===$c);	//false identico	
var_dump($a!=$c);	//false  difrente
var_dump($a<>$c);	//false  diferente
var_dump($a!==$c);	//true  no identico
var_dump($a<$b);	//true menor que
var_dump($a>$b);	//false mayor que
var_dump($b<=$d);	//true menor igual
var_dump($b>=$d);	//true mayor igual
//var_dump($a<=>$b);	//-1
//var_dump($b<=>$a);	//1
?>