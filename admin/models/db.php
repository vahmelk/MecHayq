<?php
	session_start();

		class database
		{
			protected $connection;
			
			protected function connect($host="localhost", $user="root", $pass="", $dbname="mvc" )
			{
				$connection = mysqli_connect($host, $user, $pass,$dbname) or die("Service temporary unavailable.");
				//$db_selected = mysqli_select_db($dbname, $connection) or die("Service temporary unavailable.");
				mysqli_set_charset($connection,"utf8");
				date_default_timezone_set("A sia/Yerevan");
				
				return $connection;
			}
			
			protected function query( $query)
			{
				$conn = $this-> connect();
				$res = mysqli_query($conn, $query);
				$data = "";
				while($row = mysqli_fetch_assoc($res))
					$data[] =  $row;
				return $data;
			}
			
			protected function query_($query)
			{
				$conn = $this-> connect();
				mysqli_query($conn,$query);
			}

			public function conn(){
				return $this->$connection;
			}
			
		}

?>