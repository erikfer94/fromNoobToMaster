<?php
$servername = "localhost";
$username = "root";
$password = "";

// Crear la conexion
$conn = new mysqli($servername, $username, $password);

// Validar la conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
echo "Conexion exitosa";
?> 