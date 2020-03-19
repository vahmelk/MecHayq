<?php
require "../admin/models/db.php";
require "../models/model.php";
class request extends model{
    public function __construct()
    {
        $for = "for";
        $regist = "regist";
        foreach (getallheaders() as $for => $regist) { 
        echo "$for : $regist <br>"; 
    }
    }  
    public function login(){
        $request=$_POST['request'];

        print_r( $request);
        explode(" ",$request);
        $sql="SELECT * FROM mechayq_dp WHERE (Username='$request[Username]' OR Email='$request[email]') AND Password='$request[Password]'";
        echo (parent::query($sql))?"ok":"fail";
    }
    public function regist()
    { 
      $_POST(request);
      parent::setUser();
    }

}
$request = new request;
$request 
?>