<?php
$a = 1;
$b = 2;
function Suma()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];

    $GLOBALS['c'] =10;
    //la variable $c se declaro como variable global
}
Suma();
echo $c;
//echo $b;
?>