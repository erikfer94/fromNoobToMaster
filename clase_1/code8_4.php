<?php
$foo=array(
	"mascota"	=>"perro",
	"consola"	=>"PlayStation4",
	"cigarros"	=>"Delicados",
	"chela"		=>"Bohemia",
	"hijos"		=>0,
	"deudas"	=>1000,
	10			=>4.5
);//$foo es una array asociativo
echo "<pre>";
var_dump($foo);
$llaves=array_keys($foo);
var_dump($llaves);
foreach ($foo as $key => $valor) {
	echo $key." => ".$valor."<br/>";
}
/*$foo[]="otro dato";
var_dump($foo);*/
echo $foo["chela"];
echo $foo[10];
echo "</pre>";
?>