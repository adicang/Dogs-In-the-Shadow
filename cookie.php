<?php

	require_once('includes/init.php');
    global $cookie;
    
   
    $urlContents = file_get_contents('php://input');
    $urlaray = json_decode($urlContents, true);

	setcookie ("userName",$urlaray['userName'],time() + (86400 * 30), "/");
	setcookie ("password",$urlaray['password'],time() + (86400 * 30), "/");
    
	
	


?>