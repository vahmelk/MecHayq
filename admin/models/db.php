<?php
	session_start();

		class database
		{
			private $connection;
			protected function connect($host="localhost", $user="root", $pass="", $dbname="mechayq")
			{
				$this->connection = mysqli_connect($host, $user, $pass,$dbname) or die("Service temporary unavailable.");
				//$db_selected = mysqli_select_db($dbname, $connection) or die("Service temporary unavailable.");
				mysqli_set_charset($this->connection,"utf8");
				date_default_timezone_set("Asia/Yerevan");
			}
			
			public function query($query)
			{
				$this->connect();
				$res = mysqli_query($this->connection, $query);
				// var_dump($res);
				while($row = mysqli_fetch_assoc($res))
					$Data[] =  $row;//+=
				$this->close();
				return $Data;
			}
			protected function query_($query)
			{
				
				 $this-> connect();
				$res=mysqli_query($this->connection,$query);
				
				$this->close();
			}

			protected function close(){
				mysqli_close($this->connection);
			}

			public function conn(){
				return $this->$connection;
			}
			
		}



?>
















