<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/modelo/usuario.php";
$ts = gmdate("D, d M Y H:i:s") . " GMT";
header("Expires: $ts");
header("Last-Modified: $ts");
header("Pragma: no-cache");
header("Cache-Control: no-cache, must-revalidate");	
//var_dump($_POST);
session_start();
$user=new Usuario();

if(!isset($_SESSION["token"]))
{
	header("Location: /");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>BIENVENIDO</h1>
	<a href="/logout.php">Cerrar Sesi&oacute;n</a>

</body>
</html>