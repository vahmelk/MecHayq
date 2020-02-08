<?php
class errors {
    function __construct(){
      
        include_once('view/layout/header.php');
        include_once('view/content/error.php');
        include_once('view/layout/footer.php');
    }
}

$error=new errors;
// var_dump($home);




?>
