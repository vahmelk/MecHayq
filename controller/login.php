<?php
class login extends model{ 
    function __construct(){ 
       parent::checkuser("login");
    }
    function render(){
        $switcher="login";
         require_once "./view/layout/header.php";
        require_once "./view/content/login.php";
        require_once "./view/layout/footer.php";
    }
     
}
$login=new login;
$login->render();

?>