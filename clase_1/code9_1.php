<?php
//funciones:es un bloque de codigo reutilisable una fun. una serie de operaciones que nos regrese una valor 
function foo($bar="CACA",$op1=2,$op2=4)
{
    echo "Hola soy $bar";
    return $op1*$op2;
}
$var=foo();
echo $var; 
echo "<br/>";
$foo2=foo("rob",5,9);
echo $foo2;
echo "<br>";
$foo3=foo("chido",5);
echo $foo2;
?>