<?php
require_once "code1_10.php";
class Ejemplo2 extends Ejemplo
{
    public static $variableEstatica = 'variable estática';

    public static function ejemplo() {
        echo parent::CONST_VALUE . "<br/>";
        echo self::$variableEstatica . "<br/>";
    }
}

$classname = 'Ejemplo2';
$classname::ejemplo(); // A partir de PHP 5.3.0

Ejemplo2::ejemplo();
?>