<?php
$foo=array(
	"mascota"	=>"perro",
	"consola"	=>"no tengo",
	"cigarros"	=>"no fumo",
	"chela"		=>"victoria",
	"hijos"		=>0.5,
	"deudas"	=>1000,
	10			=>4.5
);//$foo es una array asociativo
echo "<pre>";
var_dump($foo);
$llaves=array_keys($foo);//array_keys me da las llaves de mi arreglo
var_dump($llaves);
foreach ($foo as $key => $valor) {
	echo $key." => ".$valor."<br/>";// me da los valores de mi arreglo 
}

$foo[]="otro dato";
var_dump($foo);
echo "</pre>";
?>