<?php
echo date("d/m/Y H:i:s")."<br/>";
echo date("d/m/Y H:i:s", strtotime("- 1 month"))."<br/>";
$fecha=strtotime("+ 8 years");
$strFecha=date("d/m/Y H:i:s", $fecha);
echo $strFecha."<br/>";
echo date("d-m-Y H i' s''", strtotime($strFecha))."<br/>";

$strFecha_2=date("Y-m-d H:i:s", $fecha);
echo $strFecha_2."<br/>";
echo date("d-m-Y H i' s''", strtotime($strFecha_2))."<br/>";

//Cambiar $fecha por +19 años y luego +20 años
?>