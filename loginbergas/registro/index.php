<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/modelo/usuario.php";
$ts = gmdate("D, d M Y H:i:s") . " GMT";
header("Expires: $ts");
header("Last-Modified: $ts");
header("Pragma: no-cache");
header("Cache-Control: no-cache, must-revalidate");	
var_dump($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login | Facebook</title>
		<link rel="icon" href="/img/iconx.png">
		<link rel="stylesheet" type="text/css" href="/css/login.css">
	</head>
	<body>
		<div class="contenedor">
			<div class="login">
				<form method="POST" action="">
					<h3>REGISTRO</h3>
					<div class="input">
						<label>Usuario</label>
						<input type="text" name="username">
					</div>
					<div class="input">
						<label>Correo</label>
						<input type="email" name="mail">
					</div>
					<div class="input">
						<label>Contrase&ntilde;a</label>
						<input type="password" name="pwd">
					</div>
					<button>Registrarme</button>
				</form>

			</div>
		</div>
	</body>
</html>