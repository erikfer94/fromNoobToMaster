<?php
class Usuario{
	
	public $username=null;
	private $mail=null;

	function __construct($user=null,$mail=null){
		$this->username=$user;
		$this->mail=$mail;
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
}

$usuario=new Usuario("erikfer94","erikfer94@gmail.com");
echo "<br/>Yo soy ".$usuario->username;
?>