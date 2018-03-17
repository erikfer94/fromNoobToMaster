<?php

require_once "code1_8.php";

$prius=new automovil;
$bici=new bicicleta;
$prius->encender();
$prius->acelerar();
echo $prius->medio."<br/>";
echo $prius->getRuedas()."<br/>";
$bici->encender();
$bici->acelerar();
echo $bici->medio."<br/>";
echo $bici->getRuedas()."<br/>";
$hitler=new submarino();
$hitler->encender();
$hitler->acelerar();
echo $hitler->medio."<br/>";
?>