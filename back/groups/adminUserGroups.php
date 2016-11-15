<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	
	require("Module.php");

	if(!mysqli_connect_error()){

    	if(isset($_POST['action'])){
    		$action = $_POST['action'];
    		
    		if(isset($_POST['userID'])){
				$userID = $_POST['userID'];

				$group = new Module;

	    		switch($action){
	    			//asignar mobile y telefono acá
	    			case "getGroups":
			        	$group->getGroupsByUser($connection, $userID);
			        break;
			        case "createGroup":
			        	$group->setGroupName($_POST['groupName']);
			        	$group->createGroup($connection, $userID);
			        break;
	    		}
	    	}else{
	    		echo "userID not setted";
	    	}
    	}else{
    		echo "action not setted";
    	}
		
	}else{
		echo "error";
	}
?>

