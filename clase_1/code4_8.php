<?php
$a = 1;
$b = 2;
function Suma()
{   //se afeta las variables glovales
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    $GLOBALS['c'] = 10;
}
Suma();
echo $b;
echo "<br>";
echo $c;
?>