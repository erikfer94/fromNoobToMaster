<?php
$fecha=new DateTime;
echo $fecha->format("d/m/Y H:i:s")."<br/>";
$fecha_2=new DateTime("2138-01-19");
echo $fecha_2->format("d/m/Y H:i:s")."<br/>";
$fecha_3=new DateTime("now");
echo $fecha_3->format("d/m/Y H:i:s")."<br/>";
$fecha_3->setTimeZone(new DateTimeZone("UTC"));
echo $fecha_3->format("d/m/Y H:i:s")."<br/>";
$fecha_3->setTimeZone(new DateTimeZone("America/Mexico_City"));
echo $fecha_3->format("d/m/Y H:i:s")."<br/>";
echo $fecha->format("d/m/Y H:i:s")."<br/>";
$fechaDiff=$fecha_2->diff($fecha);
echo $fechaDiff->format('%R%a days')."<br/>";
$fechaDiff_2=$fecha->diff($fecha_2);
echo $fechaDiff_2->format('%R%a days')."<br/>";
?>