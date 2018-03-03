<?php
$a=3;
$b=4;
$c="3";
$d="4";
var_dump($a==$c);  	//true
echo "<br/>";
var_dump($a===$c);	//false
echo "<br/>";
var_dump($a!=$c);	//false
echo "<br/>";
var_dump($a<>$c);	//false
echo "<br/>";
var_dump($a!==$c);	//true
echo "<br/>";
var_dump($a<$b);	//true
echo "<br/>";
var_dump($a>$b);	//false
echo "<br/>";
var_dump($b<=$d);	//true
echo "<br/>";
var_dump($b>=$d);	//trueecho "<br/>";

#var_dump($a<=>$b);	//-1
#var_dump($b<=>$a);	//1
?>