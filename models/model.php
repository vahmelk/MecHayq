<?php
	
	require_once('admin/models/db.php');
	
	/*
	* 
	*/
	class model extends database{
		
		function __construct()
		{
			// $this-> $x;
			// var_dump($x);
			
		}
		
		public function setUser($data){
			$db="INSERT INTO mechayq_dp (u_id, Name, Age, Username,Email,Password,gender) VALUES('$data[u_id]','$data[Name]','$data[Age]', '$data[Username]','$data[Email]','$data[Password]', '$data[gender]')";
			;
			if($this->validation($data)){
				parent::query_($db);
				echo "asd";
             	setcookie("u_id", $data[u_id], time() + (86400 * 30) * 360, "/"); // 86400 = 1 day
				return true;
			}
			else{
				echo "it's false";
				return false; 
			}
			
		}
		public function cookie(){
				   $sql="SELECT * FROM mechayq_dp WHERE u_id=$_COOKIE[u_id]";	
				   if (mysqli_query($sql)) {
					   header("LOCATION: ".$ROOT."login");
				   }else {
					   echo "please register to our Website";
				   }
			}
		public function validation($data){
			$passValid="#.*^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#";
        	$userValid="/^[a-z0-9_.-]{4,20}$/";
			$emailValid="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
			$sql="SELECT * FROM mechayq_dp WHERE Username='$data[Username]' Or Email='$data[Email]'";
			
			$result=(preg_match( $emailValid, $data[Email]) && preg_match($passValid, $data[Password]) && preg_match($userValid, $data[Username]) && $data[ConfirmPassword]==$data[Password] && !parent::query($sql));

			// return $result;	
			return true;
    	}
	}	
	$model=new model;
?>	