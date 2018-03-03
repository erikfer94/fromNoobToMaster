<?php
$saludo = function($nombre)
{
    printf("Hola %s\r\n<br>", $nombre);
};

$saludo('Mundo');
$saludo('PHP');
$saludo('perros');
?>