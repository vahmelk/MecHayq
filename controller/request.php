<?php
require "../admin/models/db.php";
require "../models/model.php";
class request extends model{
    public function __construct(){
        // $header=get_headers('./request.php');
    }
    public function login(){
        $request=$_GET['request'];// change to POST
        explode(" ",$request);
        $sql="SELECT * FROM mechayq_dp WHERE (Username='$request[Username]' OR Email='$request[email]') AND Password='$request[Password]'";
        echo (parent::query($sql))?"ok":"fail";
    }
}
          
    var_dump(getallheaders()["for"]);
$request=new request;
var_dump($_GET);
?>