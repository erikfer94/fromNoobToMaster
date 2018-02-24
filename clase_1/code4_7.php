<?php
$a = 1;
$b = 2;
function Suma()
{
    global $a, $b; //ocupar las variables globales que se declararon arriba   	
    $b = $a + $b;
}
Suma();
echo $b;
?>
