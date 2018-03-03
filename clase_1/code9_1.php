<?php
function foo($bar="PHP",$op1=2,$op2=NULL)
{
    echo "Hola soy $bar";
    if($op2)
    {
    	return $op1*$op2;
	}else{
		return $op1;
	}
}
$var=foo();
echo $var;
echo "<br/>";


$foo2=foo("Erik",3,5);
echo $foo2;
?>