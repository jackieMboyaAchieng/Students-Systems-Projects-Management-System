<?php


class DBconnect{
	private $database = "students_systems_projects_management_system";
	private $username = "root";
	private $password = "";
	private $server = "localhost";
	private $charset = "utf8";
	private $debug = "true";


	public function connect(){
		try {
			
			$dsn = "mysql:host=".$this->server.";dbname=".$this->database.";charset".$this->charset;

			$connection = new PDO($dsn, $this->username, $this->password);

			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $connection;
			
		} catch (Exception $e) {
			echo "Connection failed: ".$e-> getMessage();
			die();
		}
	}
} 



?>