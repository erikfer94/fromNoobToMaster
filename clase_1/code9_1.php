<?php
function foo($bar="PHP",$op1=2,$op2=4)
{
    echo "Hola soy $bar";
    return $op1*$op2;
}
$var=foo();
echo $var;
echo "<br/>";
$foo2=foo("Erik",5,9);
echo $foo2;
?>