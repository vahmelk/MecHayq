<?php
require "../admin/models/db.php";
require "../models/model.php";
class request extends model{
<<<<<<< HEAD
    public function __construct()
    {
        $for = "for";
        $regist = "regist";
        foreach (getallheaders() as $for => $regist) { 
        echo "$for : $regist <br>"; 
=======
    public function __construct(){
        // $header=get_headers('./request.php');
>>>>>>> 19e0f76b523349474e870739f26af9e565fdcc10
    }
    }  
    public function login(){
<<<<<<< HEAD
        $request=$_POST['request'];

        print_r( $request);
=======
        $request=$_GET['request'];// change to POST
>>>>>>> 19e0f76b523349474e870739f26af9e565fdcc10
        explode(" ",$request);
        $sql="SELECT * FROM mechayq_dp WHERE (Username='$request[Username]' OR Email='$request[email]') AND Password='$request[Password]'";
        echo (parent::query($sql))?"ok":"fail";
    }
<<<<<<< HEAD
    public function regist()
    { 
      $_POST(request);
      parent::setUser();
    }

}
$request = new request;
$request 
=======
}
          
    var_dump(getallheaders()["for"]);
$request=new request;
var_dump($_GET);
>>>>>>> 19e0f76b523349474e870739f26af9e565fdcc10
?>