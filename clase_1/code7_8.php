<?php
$letras=array("A","B","C","D","E","F","G","H","I","J","K");
foreach ($letras as $key => $value) {
	echo "Voy en la letra $key => $value <br/>";
}
foreach ($letras as $value) {
	echo "Voy en la letra $value <br/>";
}
?>