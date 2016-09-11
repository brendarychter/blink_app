<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	
	require("User.php");

	if(!mysqli_connect_error()){

    	if(isset($_POST['action'])){
    		$action = $_POST['action'];
    		
    		if(isset($_POST['username']) && isset($_POST['password'])){
	    		switch($action){
	    			case "getUser":
			        	$user = new User;
			        	$user->setUsername($_POST['username']);
			        	$user->setPassword($_POST['password']);
			        	//VALIDAR ESTO
			        	$_SESSION["username"] = $_POST['username'];
			        	$_SESSION["password"] = $_POST['password'];

			        	$user->getUser($connection);

			        break;
			        case "createUser":
			        break;


			        case "deleteUser":
			        break;	
	    		}
	    	}
    	}else{
    		echo "no";
    	}
		
	}else{
		echo "error";
	}
?>

