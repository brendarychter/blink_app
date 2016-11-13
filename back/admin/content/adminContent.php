<?php
	session_start();
	require_once("../connection.php");
    $connection = new connection;
	
	require("Content.php");

	if(!mysqli_connect_error()){
    	if(isset($_POST['action'])){
    		$action = $_POST['action'];
    		if(isset($_POST['newValue'])){
                $newValue = $_POST['newValue'];
                $realValue = $_POST['realValue'];
    			$language = $_POST['language'];
    		}
    		//agregar en params el value.
    		//filtrar por español o por ingles. 2 queries distintas?
    		$content = new Content;
    		switch($action){
    			case "modifyContent":
		        	$content->modifyHomeContent($connection, $newValue, $realValue, $language);
		        break;
		        case "getContent":
		        	$content->getHomeContent($connection);
		        break;
    		}
    	}else{
    		echo "action not setted";
    	}
		
	}else{
		echo "error";
	}
?>

