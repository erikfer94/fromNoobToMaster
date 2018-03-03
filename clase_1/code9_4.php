<?php
$mensaje = 'hola';
// Sin "use"
$ejemplo = function () {
    //var_dump($mensaje);
};
echo "<br/>";
$ejemplo();
// Heredar $mensaje
$ejemplo = function () use ($mensaje) {
    var_dump($mensaje);
};
$ejemplo();
echo "<br/>";
// El valor de la variable heredada está cuando la función
// está definida, no cuando se le invoca
$mensaje = 'mundo';
echo "<br/>";
$ejemplo();
echo "<br/>";
// Reiniciar el mensaje
$mensaje = 'hola';
// Heredar por referencia
$ejemplo = function () use (&$mensaje) {
    var_dump($mensaje);
};
$ejemplo();
echo "<br/>";
// El valor cambiado en el ámbito padre
// se refleja dentro de la llamada a la función
$mensaje = 'mundo';
$ejemplo();
echo "<br/>";
// Los cierres también aceptan argumentos normales
$ejemplo = function ($arg) use ($mensaje) {
    var_dump($arg . ' ' . $mensaje);
};
$ejemplo("hola");
?>