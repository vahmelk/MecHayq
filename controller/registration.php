<?php

class registration extends model{
    public function __construct(){
        // var_dump($_POST);
        $this->render();

    }
    public function render(){
        $switcher="registration";
        require_once "./view/layout/header.php";
        require_once "./view/content/registration.php";
        require_once "./view/layout/footer.php";
    }
    // public function regist(){
    //     $data=array("u_id"=>1,"Name"=>"Elen","Age"=>16,"Username"=>"fgsdfs_fdsdfsdf4", "Email" => "dfghj.asgoeasdfn@gmail.com", "Password" => "Elen.1234", "ConfirmPassword" => "Elen.1234", "gender"=> "female");
    //   // parent::setUser($data);
    // }

}
$regist=new registration;
// $regist->regist();






// require_once '../models/model.php';
// class registration extends model{
//     public function render(){
//         require_once "../view/layout/header.php";
//         require_once "../view/content/registration.php";
//         require_once "../view/layout/footer.php";
//     }
//     public function regist(){
//         $data=array("u_id"=>1,"Name"=>"Elen","Age"=>16,"Username"=>"fgsdfs_fdsdfsdf4", "Email" => "dfghj.asgoeasdfn@gmail.com", "Password" => "Elen.1234", "ConfirmPassword" => "Elen.1234", "gender"=> "female");
//         parent::setUser($data);
//     }

?>