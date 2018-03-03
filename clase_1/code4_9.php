<?php
$a="hola";
//se crea una variable dinamica
$$a="mundo";// se vuelve con el valor hola y el que se asigna

echo "$a ${$a}";//se saca el valos de $a
echo "<br/>";
echo "$a $hola";
?>