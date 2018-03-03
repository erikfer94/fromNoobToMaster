<?php
$servername = "localhost";
$username = "root";
$password = "";

// Crear la conexion
$conn = mysqli_connect($servername, $username, $password);

// Validar la conexion
if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}
echo "Conexion exitosa";
?> 