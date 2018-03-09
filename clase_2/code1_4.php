<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="curso_php";
// Crear la conexion
$conn = new mysqli($servername, $username, $password,$database);

// Validar la conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

?> 