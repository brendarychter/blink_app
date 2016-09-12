<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	
	require("Module.php");

	if(!mysqli_connect_error()){

    	if(isset($_POST['action'])){
    		$action = $_POST['action'];
    		
			$group = new Module;
    		switch($action){
    			//asignar mobile y telefono acá
    			case "getGroups":
    				//Es un metodo de grupo o de usuario?
		        	$group->getGroupsByUser($connection);
		        break;
    		}
    	}else{
    		echo "action not setted";
    	}
		
	}else{
		echo "error";
	}
?>

