<?php

require_once '../db/Connection.php';

class Users{
	public $user_id;
	public $name;
	public $email;
	public $password;

	public function allUsers(){
		$sql = "SELECT name, email FROM users";
		$con = new Connection();
		$rs = $con->query($sql);
		$con->close();

		return $rs;
	}
	public function logIn($datos){
		$sql = "SELECT user_id, name, email, password WHERE email = ? AND password = ?";
		$stmt = $con->prepare($sql);
		$rs = $stmt->execute(array($datos['email'], $datos['password']));
		$con->close();

		return $rs;
	}
}