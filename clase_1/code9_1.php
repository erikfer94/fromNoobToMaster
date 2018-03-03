<?php
function foo($bar="PHP",$op1=2,$op2=4)
{
    echo "Hola soy $bar";
    if($op2)
    	return $op1*$op2;
    else
    	return $op1;
}
$var=foo();
echo $var;
echo "<br/>";
$foo2=foo("Erik",5,9);
echo $foo2;
$foo3=foo("Nombre",3);
echo $foo3;
?>