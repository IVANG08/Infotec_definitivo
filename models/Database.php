<?php

    class DataBase{		
		public function __construct(){}
		public static function connection(){
			$pdo = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8','root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	}

?>