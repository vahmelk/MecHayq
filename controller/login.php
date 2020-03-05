<?php
class login extends model{ 
    function __construct(){ 
       parent::checkuser(2);
    //    parent::checkuserlogin(2);
    }
    function render(){
         require_once "./view/layout/header.php";
        require_once "./view/content/login.php";
        require_once "./view/layout/footer.php";
    }
     function login(){
         $sql="SELECT * FROM mechayq_dp WHERE Username='$data[Username]' AND Password='$data[Email]'";
         if (parent::query($sql)){
            //  echo "create";
             return "create";
         }
         else{
            //  echo  "have already created";
             return  "have already created";

         }

     }
}
$login=new login;
$login->render();

?>