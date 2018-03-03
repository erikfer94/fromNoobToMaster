<?php
// recursividada 
function multiplicacion($a,$b,$n=0)
{
	if($n<$b)
	{
		echo "$n es menor que $b <br>";
		$n++;
		echo "entre la funcion con a=$a, b=$b y n=$n";
		echo "<br>";
		return multiplicacion($a,$b,$n)+$a;
	}
	return $a;
}
echo multiplicacion(3,4);
?>
