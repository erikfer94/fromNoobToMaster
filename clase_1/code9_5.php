<?php
function multiplicacion($a,$b,$n=1)
{
	if($n<$b)
	{
		echo "$n es menor que $b <br/>";
		$n++;
		echo "entra la función con a = $a, b = $b y n = $n <br/>";
		return multiplicacion($a,$b,$n)+$a;
	}
	return $a;
}
echo multiplicacion(3,4);
?>