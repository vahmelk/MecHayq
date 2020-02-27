<?php

class home extends model {
    
    function __construct(){	
     
      if(!isset($_COOKIE["u_id"])){
        header("LOCATION: ".$ROOT."login");
      }
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

