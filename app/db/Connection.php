<?php 
require_once "../config/database.php";
class Connection {
	private $con = null;

	public function __construct(){
		try{
			self::conect();
			echo "Coneccion exitosa";
		}
		catch (PDOException $e){
			echo "Error en la coneccion ".$e;
		}
	}
	public function conect(){
		$this->con = new PDO('mysql:host'.HOST.';dbname:'.BD.';',USER,PASS);
		$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $this->con;
	}
	public function close(){
		$this->con = null;
	}
	
}
 ?>