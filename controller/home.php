<?php

class home extends model{
    
    function __construct(){	
      // echo isset($_COOKIE["u_id"]);
      if(!isset($_COOKIE["u_id"])){
        header("LOCATION: ".$ROOT."login");
      }
      parent::checkuser("home");
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

