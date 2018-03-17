<?php
class Usuario{
	
	const CONSTANTE="un valor";

	public function testConstante(){
		echo "<br/>".self::CONSTANTE;
	}
}
echo "<br/>".Usuario::CONSTANTE;
$claseUsuario="Usuario";
echo "<br/>".$claseUsuario::CONSTANTE;
$ObjUser=new Usuario;
echo "<br/>".$ObjUser::CONSTANTE;
echo "<br/>".$ObjUser->testConstante();
?>