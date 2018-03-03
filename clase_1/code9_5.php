<?php
function multiplicacion($a,$b,$n=1)
{
	if($n<$b)
	{
		echo "$n es menor que $b <br>";
		$n++;
		echo "Entra la funcion con a=$a , b=$b y n=$n <br>";		
		return multiplicacion($a,$b,$n)+$a;
	}
	echo "resultado es:";
	return $a;

}
echo multiplicacion(3,4);
?>