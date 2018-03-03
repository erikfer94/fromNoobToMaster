<?php
$saludo = function($nombre)
{
    printf("Hola %s\r\n", $nombre);
};

$saludo('Mundo');
echo "<br>";	
$saludo('PHP');
?>