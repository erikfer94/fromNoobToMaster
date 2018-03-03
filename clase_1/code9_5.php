<?php
function multiplicacion($a,$b,$n=1)
{
	if($n<$b)
	{
		echo "$n es menor que $b";
		echo "<br/>";
		$n++;
		echo "Entra la función con a=$a, b=$b, n=$n";
		echo "<br/>";
		return multiplicacion($a,$b,$n)+$a;
	}
	return $a;
}
echo multiplicacion(3,4);
?>