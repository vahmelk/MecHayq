<?php

class request extends model{
    public function __construct(){
        $header=get_headers('./request.php');
        
    }
    public function login(){
        $request=$_POST['request'];
        explode(" ",$request);
        $sql="SELECT * FROM mechayq_dp WHERE (Username='$request[Username]' OR Email='$request[email]') AND Password='$request[Password]'";
        echo (parent::query($sql))?"ok":"fail";
    }
}

?>