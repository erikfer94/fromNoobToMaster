<?php
$dimensiones=array(
	"primera dimension" => array(
		"Ejemplo" => "Una linea",
		"segunda dimension" => array(
			"Ejemplo" => "Un cuadro (geometrico)",
			"tercera dimension" => array(
				"Ejemplo" => "Un cubo",
				"cuarta dimension" => array(
					"Ejemplo" => "El tiempo",
					"quinta dimension" =>array(
						"Einstein" => "Nunca habia llegado tan lejos",
						"...onceava dimension" =>array(
							"Hawking" => "Cuerdas!!!",
							"ya ahi muere porfa"
						)
					)
				)
			)
		)
	)
);
echo "<pre>";
var_dump($dimensiones);
echo "</pre>";
unset($dimensiones);
?>