<?php
function multiplicacion($a,$b,$n=1)
{
	if($n<$b)
	{
		$n++;
		return multiplicacion($a,$b,$n)+$a;
	}
	return $a;
}
echo multiplicacion(3,4);
?>