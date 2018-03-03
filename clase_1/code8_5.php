<?php
$dimensiones=array(
			"1 dimension" => array(
							"Ejemplo" => "Una linea",
							"2 dimension" => array(
											"Ejemplo" => "Un cuadro (geometrico)",
											"3 dimension" => array(
															"Ejemplo" => "Un cubo"
														)
							)
				)
);
echo "<pre>";
var_dump($dimensiones);
echo "</pre>";
echo "<br>";
echo $dimensiones;
unset($dimensiones);
?>