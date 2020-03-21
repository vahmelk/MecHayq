<?php
class errors extends model {
    function __construct(){
      
       
    }
    public function render(){
        $switcher="script";
        $css="error";
        require_once "./view/layout/header.php";
        require_once "./view/content/error.php";
        require_once "./view/layout/footer.php";
    }
}

$error=new errors;
$error->render();
// var_dump($home);




?>
