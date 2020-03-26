<?php
require "../admin/models/db.php";
require "../models/model.php";
class request extends model{
    private $request;
    public function __construct($request){
        $this->request=$request;
    }
    
    public function login(){
        // change to POST
        // var_dump($this->request[email]);
        $sql="SELECT u_id FROM mechayq_dp WHERE (Username='".$this->request[username]."' OR Email='".$this->request[email]."') AND Password='".$this->request[password]."'";
        $valid_u_id=parent::login_user($sql);
        if (empty($valid_u_id)){
            echo "fail";
        }else{
            var_dump($valid_u_id[0]["u_id"]);
        }
       
    }
     public function registration()
    { 
        if(parent::setUser($this->request)){
             echo "ok";//var_dump
         }
         else{
             echo "fail";
         }
    }
    
}
$request=new request($_GET);

if(getallheaders()["for"] == "registration"){
    $request->registration();
}elseif(getallheaders()["for"] == "login"){
    $request->login();
}

// var_dump($_GET);
?>