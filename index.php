<?php
	ob_start();
	// header( "Content-Type: text/html; charset=utf-8" );
	// header("Location:http://".$_SERVER['HTTP_HOST']."/view/content/about.php" );
	$ROOT = "http://localhost/mechayq/";
	require_once 'models/model.php'; 
	require_once 'models/bootstrap.php';
	require_once 'models/createdp.php';				//Creating DB and table if not exist 
	
	$app = new bootstrap($ROOT);
	
	// if(!$app->valid){

	// }
	
?>