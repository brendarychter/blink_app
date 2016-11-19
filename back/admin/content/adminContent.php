<?php
	session_start();
	require_once("../connection.php");
    $connection = new connection;
	
	require("Content.php");

	if(!mysqli_connect_error()){
    	if(isset($_POST['action'])){
    		$action = $_POST['action'];
    		
    		//agregar en params el value.
    		//filtrar por español o por ingles. 2 queries distintas?
            $table = $_POST['table'];
    		$content = new Content;
    		switch($action){
    			case "modifyContent":
                    if(isset($_POST['newValue'])){
                        $newValue = $_POST['newValue'];
                        $realValue = $_POST['realValue'];
                        $language = $_POST['language'];
                        $content->modifyHomeContent($connection, $newValue, $realValue, $language, $table);
                    }
		        break;
		        case "getContent":
		        	$content->getHomeContent($connection, $table);
		        break;
                case "showContent":
                    $val = $_POST['section'];
                    $flag = $_POST['show'];
                    $content->showContent($connection, $val, $flag, $table);
                break;
    		}
    	}else{
    		echo "action not setted";
    	}
		
	}else{
		echo "error";
	}
?>

