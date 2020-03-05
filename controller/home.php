<?php
class home  extends model{
    
    function __construct(){ 
       parent::checkuser(1);
      //  parent::checkuserlogin(1);
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

