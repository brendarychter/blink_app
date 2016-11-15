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
			        	//me trae nulos el mail y el telefono
	        			$_SESSION["userID"] = $user->getUserID();
	        			$_SESSION["mail"] = $user->getMail();
	        			$_SESSION["phoneNumber"] = $user->getPhoneNumber();

	        			//$this->setPhoneNumber($user->getPhoneNumber());
	        			//$this->setMail($user->getMail());
			        break;

			        case "createUser":
			        	$user->setPhoneNumber($_POST['phoneNumber']);
	        			$user->setMail($_POST['mail']);
			        	$user->createUser($connection);
			        	$_SESSION["userID"] = $user->getUserID();
			        break;

			        case "updateUser":
			        	//$user->setPhoneNumber($_POST['phoneNumber']);
			        	$user->setUserID($_SESSION["userID"]);

	        			$user->setMail($_POST['mailUpdate']);
	        			$user->setPhoneNumber($_POST['phoneNumberUpdate']);

	        			$_SESSION["userID"] = $user->getUserID();

			        	$user->updateUser($connection);
	        			$_SESSION["mail"] = $user->getMail();
	        			$_SESSION["phoneNumber"] = $user->getPhoneNumber();

			        break;	

			        case "deleteUser":
			        	$user->setUserID($_SESSION["userID"]);
			        	$user->deleteUser($connection);
			        break;	
	    		}
	    		//VALIDAR ESTO
	    		$_SESSION["username"] = $user->getUsername();
	        	$_SESSION["password"] = $user->getPassword();
	    	}else{
    			echo "username and password not setted";
	    	}
    	}else{
    		echo "action not setted";
    	}
	}else{
		echo "error";
	}
?>

