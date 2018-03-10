<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="curso_php";
try {
    $conn = new PDO("mysql:host=$servername;dbname=curso_php", $username, $password);
    // cambiar el modo de error de PDO a excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "Conexion fallida: " . $e->getMessage();
}
?> 