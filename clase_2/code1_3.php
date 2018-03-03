 <?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=curso_php", $username, $password);
    // cambiar el modo de error de PDO a excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion Exitosa";
    }
catch(PDOException $e)
    {
    echo "Conexion fallida: " . $e->getMessage();
    }
?> 