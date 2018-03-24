<?php
$ts = gmdate("D, d M Y H:i:s") . " GMT";
header("Expires: $ts");
header("Last-Modified: $ts");
header("Pragma: no-cache");
header("Cache-Control: no-cache, must-revalidate");	
?>
<!DOCTYPE html>
<html>
<head>
	<title>HTML BERGAS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="code4_3.css">
	<link rel="icon" href="img/iconx.png">
</head>
<body>
	<h1>Una P&aacute;gina WEB PINCHE</h1>
	<p>Contenido pinche de la p&aacute;gina Web pinche</p>
	<button type="button" id="alv" class="boton-alv">Todos ALV</button>
	<h1 id="txtALV"></h1>

	<script type="text/javascript" src="code4_4.js"></script>
</body>
</html>