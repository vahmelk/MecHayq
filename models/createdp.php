<?php

$con=mysqli_connect("localhost","root", "");
if(mysqli_connect_errno($con)){
    // echo "failed connect";
    die("failed connect");
}
else{
    $query="CREATE DATABASE IF NOT EXISTS mechayq";
    if(mysqli_query($con,$query)){
        $con= mysqli_connect("localhost","root", "", "mechayq");
        $sql="CREATE TABLE mechayq_dp (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, u_id INT(20),  Name CHAR(30), Age INT, Username CHAR(30), Email CHAR(30), Password CHAR(30),  gender CHAR(30))";
        mysqli_query($con, $sql);
    } else {
        die("Error while creating DB");
    }
}  

?>