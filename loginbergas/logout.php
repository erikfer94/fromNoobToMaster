<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/modelo/usuario.php";
$user=new Usuario;
$user->killSession();
header("Location: /");
?>