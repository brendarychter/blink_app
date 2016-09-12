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
	        			$_SESSION["userID"] = $user->getUserID();

			        break;

			        case "createUser":
			        	$user->setPhoneNumber($_POST['phoneNumber']);
	        			$user->setMail($_POST['mail']);
			        	$user->createUser($connection);
			        	
			        break;

			        case "updateUser":
			        	//$user->setPhoneNumber($_POST['phoneNumber']);
			        	$user->setUserID($_SESSION["userID"]);


	        			$user->setMail($_POST['mailUpdate']);
	        			//$_SESSION["userID"] = $user->getUserID();

			        	$user->updateUser($connection);
	        			//$_SESSION["mail"] = $user->getMail();

			        break;	

			        case "deleteUser":
			        	$user->setUserID($_SESSION["userID"]);
			        	$user->deleteUser($connection);
			        break;	
	    		}
	    		//VALIDAR ESTO
	    		$_SESSION["username"] = $user->getUsername();
	        	$_SESSION["password"] = $user->getPassword();
	        	//$_SESSION["mail"] = $user->getMail();
	        	$_SESSION["phoneNumber"] = $user->getPhoneNumber();
	    	}
    	}else{
    		echo "action not setted";
    	}
		
	}else{
		echo "error";
	}
?>

