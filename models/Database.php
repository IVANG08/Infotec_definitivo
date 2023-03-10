<?php

    class DataBase{		
		public function __construct(){}
		public static function connection(){
			$host="localhost";
			$user="root";
			$pass="";

			$db="infotec";

			$con=mysqli_connect($host,$user,$pass);
			
			mysqli_select_db($con,$db);

			return $con;

		}
	}

?>
