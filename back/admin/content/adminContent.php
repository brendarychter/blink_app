<?php
	session_start();
	require_once("../connection.php");
    $connection = new connection;
	
	require("Content.php");

	if(!mysqli_connect_error()){
    		$action = 'getContent';
    		
    		//agregar en params el value.
    		//filtrar por español o por ingles. 2 queries distintas?
            $table = 'home';
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
                case "getMenu":
                    $content->getMenu($connection);
                break;
                case "updateMenu":
                    if(isset($_POST['newValue'])){
                        $newValue = $_POST['newValue'];
                        $realValue = $_POST['realValue'];
                        $language = $_POST['language'];
                        $content->updateMenu($connection, $newValue, $realValue, $language);
                    }
                break;
                case "showContent":
                    $val = $_POST['section'];
                    $flag = $_POST['show'];
                    $content->showContent($connection, $val, $flag, $table);
                break;

                case "showAndHideMenu":
                    $value = $_POST['value'];
                    $flag = $_POST['show'];
                    $content->showAndHideMenu($connection, $value, $flag);
                break;
    		}
		
	}else{
		echo "error";
	}
?>

