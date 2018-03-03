<?php
echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);
echo "</pre>";
echo "guardar desde". $_FILES["prueba"]["tmp_name"]." en ".
$_SERVER["DOCUMENT_ROOT"]."/".$_FILES["prueba"]["name"];
move_uploaded_file($_FILES["pruebas"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"]."/".$_FILES["prueba"]["name"]);
?>