<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/libraries/database.php";
class Usuario{
	protected $id=null;
	public $username=null;
	private $pwd=null;
	protected $mail=null;
	public $estatus=null;
	private $db=null;
	public $error="";
	function __construct($id=null){
		$this->db=new Database("localhost","root","","loginbergas");
		if($id){
			$this->create($id);
		}
	}
	private function create($id){
		$perro=$this->db->conn->query("SELECT o_user_username, o_user_mail FROM o_user WHERE o_user_id=$id");
		if($perro)
		{
			if($perro->num_rows>0)
			{
				while($row=$perro->fetch_assoc())
				{
					$this->createSession($id,$row["o_user_username"]);
				}
				return true;
			}
			else{
				$this->error.="no hay datos";
			}
		}
		else
		{
			$this->error.="no se ejecuto el select";
		}
		return false;
	}
	public function login($data){
		$sql="SELECT o_user_id, o_user_password FROM o_user WHERE o_user_username='".$data["username"]."'";
		//echo $sql;
		$user=null;
		$perro=$this->db->conn->query($sql);
		if($perro){
			if($perro->num_rows>0)
			{
				while($row=$perro->fetch_assoc())
				{
					$user=$row;
				}
			}
		}
		if($user)
		{
			print_r($user);
			if($this->validatePassword($data["pwd"],$user["o_user_password"])){
				if($this->create($user["o_user_id"]))
					return true;
			}
		}
		return false;
	}
	private function validatePassword($pwd,$hsh)
	{
		return password_verify( $pwd , $hsh );
	}
	private function makePwd($pwd)
	{
		return password_hash($pwd,PASSWORD_BCRYPT);
	}
	public function add($data){
		$sql="INSERT INTO o_user(o_user_username, o_user_password, o_user_mail) VALUES ('".$data["username"]."','".$this->makePwd($data["pwd"])."','".$data["mail"]."')";
		//echo $sql;
		if($this->db->conn->query($sql)){
			if($this->create($this->db->conn->insert_id))
				return true;
			else
				$this->error.="nose guardo";
		}
		else
		{
			$this->error.="no se ejecuto el insert";
		}
		return false;
	}
	private function createSession($id,$username){
		//session_start();
		$_SESSION["id"]=$id;
		$_SESSION["username"]=$username;
		$_SESSION["token"]=base64_encode($id.strtotime("now").rand(0,100).$username);
	}
	public function killSession(){
		session_start();
		session_unset();
		session_destroy();
	}
}