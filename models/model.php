<?php
 
 /*
 * 
 */
 class model extends database{
  
  function __construct()
  {
   // $this-> $x;
   // var_dump($x);
   
  }
  public function login_user($sql){
    return parent::query($sql);
  }
  public function setUser($data){
   $db="INSERT INTO mechayq_dp (u_id, Name, Age, Username,Email,Password,gender) VALUES($data[u_id],'$data[name]',$data[age], '$data[username]','$data[email]','$data[password]', '$data[gender]')";
   if($this->validation($data)){
    parent::query_($db);
    return true;
   }
   else{
    
    return false; 
   }
  }
  

/* if($a==50  && ($b==60 || $b==100)){
  
}*/

	public function checkuser($from){ 
    
      $sql="SELECT * FROM mechayq_dp WHERE u_id=$_COOKIE[u_id]";
      	if ($from=="home" && (!isset($_COOKIE['u_id']) || (isset($_COOKIE['u_id']) && !parent::query($sql)))) {
            header("LOCATION:/login");
     		}elseif(($from=="login" || $from=="registration") && isset($_COOKIE['u_id']) && parent::query($sql)){
           echo "sadfhavs";
            header("LOCATION:/");
         }
  }
 
	
  public function validation($data){
   $passValid="/(?=^.{6,}$)((?=.*\d)(?=.*[A-Z])(?=.*[a-z])|(?=.*\d)(?=.*[^A-Za-z0-9])(?=.*[a-z])|(?=.*[^A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z])|(?=.*\d)(?=.*[A-Z])(?=.*[^A-Za-z0-9]))^.*/";
   $userValid="/^[a-z0-9_.-]{4,20}$/";
   $emailValid="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
   $sql="SELECT * FROM mechayq_dp WHERE Username='$data[username]' OR Email='$data[email]'";
   $in_db=parent::query($sql);
   $result=(preg_match( $emailValid, $data[email]) && preg_match($passValid, $data[password]) && preg_match($userValid, $data[username]) && !$in_db);// ka true jxtac false return false
  //  var_dump($result);
  //   var_dump(preg_match( $passValid, $data[password]));
   return $result; 
    
     }
 } 
 $model=new model;
?>
