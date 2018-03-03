<?php
function foo($bar="PHP",$op1=2,$op2=null)
{
    echo "Hola soy $bar";
    if ($op2)
    	return $op1+$op2;
    else
    	return $op1;
}
$var=foo();
echo $var;
echo "<br/>";
$foo2=foo("Rolando",5,9);
echo $foo2;
echo "<br/>";
$foo3=foo("Nombre",3);
echo $foo3;
?>