<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b8ba9d94f28aff";$this->pass="a8337514";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_f51a3950727cd14";
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="be9e2ab390ad38";$this->pass="2d53ab79";$this->host="eu-cdbr-west-03.cleardb.nett";$this->ddbb="heroku_3b310a6ef45c319";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
