<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="curso_php";
// Crear la conexion
$conn = mysqli_connect($servername, $username, $password, $database);

// Validar la conexion
if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}

?> 