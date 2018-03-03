<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO DE POST</title>
</head>
<body>
	<!---->
	<form method="POST" action="code10_8.php?perro=2" enctype="multipart/form-data">
		<input type="text" name="name">
		<input type="text" name="apellido">
		<!--la palabra file crea el boton para salecionar el archivo-->
		<input type="file" name="prueba">
		<!--el subit crea el boton de Enviar -->
		<input type="submit" name="Enviar">
	</form>
</body>
</html>