<?php
class Usuario{
	
	public $username=null;
	private $mail=null;

	public function login($username=null,$mail=null,$pwd=null){
		/*Aqui va un login*/
	}
	private function setUsername($username,$mail){
		$this->username=$username;
		$this->mail=$mail;
	}
	public function inicioUsuario($user,$mail)
	{
		$this->setUsername($user,$mail);
		echo "El nuevo Usuario es $user y su correo es $mail";
	}
	private function hashPassword($pwd)
	{
		/*Aqui hasheamos la contrseña*/
	}
}

$usuario=new Usuario;
$usuario->inicioUsuario("erikfer94","erikfer94@gmail.com");
echo "<br/>Yo soy ".$usuario->username;
?>