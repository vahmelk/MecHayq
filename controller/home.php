<?php
class home  extends model{
    
<<<<<<< HEAD
    function __construct(){	
      // echo isset($_COOKIE["u_id"]);
      if(!isset($_COOKIE["u_id"])){
        header("LOCATION: ".$ROOT."login");
      }elseif($_COOKIE["u_id"] == ""){
        header("LOCATION: ".$ROOT."login");
      }
=======
    function __construct(){ 
       parent::checkuser(1);
      //  parent::checkuserlogin(1);
>>>>>>> 208bc8bb4bc99dfe21fbd45748a4bed0151e84a0
    }
    function render(){
      require_once "view/layout/header.php";
      require_once "view/content/menu.php";
      require_once "view/layout/footer.php";
    }
}
$home = new home();
$home->render();






?>

