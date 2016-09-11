<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	
	require("User.php");

	if(!mysqli_connect_error()){

    	if(isset($_POST['action'])){
    		$action = $_POST['action'];
    		
    		if(isset($_POST['username']) && isset($_POST['password'])){
    			$user = new User;
	        	$user->setUsername($_POST['username']);
	        	$user->setPassword($_POST['password']);
	        	
	    		switch($action){
	    			//asignar mobile y telefono acá
	    			case "getUser":
			        	$user->getUser($connection);
			        	$_SESSION["username"] = $_POST['username'];
	        			$_SESSION["password"] = $_POST['password'];
	        			//$_SESSION["userID"] = $user->getUserID();
			        break;
			        case "createUser":

			        	$user->setPhoneNumber($_POST['phoneNumber']);
	        			$user->setMail($_POST['mail']);

			        	$user->createUser($connection);

			        	$_SESSION["mail"] = $_POST['mail'];
	        			$_SESSION["phoneNumber"] = $_POST['phoneNumber'];
			        	$_SESSION["username"] = $_POST['username'];
	        			$_SESSION["password"] = $_POST['password'];
			        break;


			        case "deleteUser":
			        break;	
	    		}
	    		//VALIDAR ESTO
	    	}
    	}else{
    		echo "action not setted";
    	}
		
	}else{
		echo "error";
	}
?>

