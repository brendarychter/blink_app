<?php
	session_start();
	require_once("../connection.php");
    $connection = new connection;
	
	require("userAdmin.php");

	if(!mysqli_connect_error()){

    	if(isset($_POST['action'])){
    		$action = $_POST['action'];
    		
    		if ($action == "setUserAdmin"){
    			$name = $_POST['nombre'];
    			$username = $_POST['username'];
    			$password = $_POST['password'];
    			$email = $_POST['email'];

    			$user = new userAdmin;
    			
    			$user->createNewUser($connection, $name, $username, $password, $email);

    		}

    		if(isset($_POST['username']) && isset($_POST['password'])){
    			$user = new userAdmin;
	        	$user->setUsername($_POST['username']);
	        	$user->setPassword($_POST['password']);
	        	
	    		switch($action){
	    			//asignar mobile y telefono acá
	    			case "getUserAdmin":
			        	$user->getUserAdmin($connection);
			        break;
	    		}
	    		//VALIDAR ESTO
	    		$_SESSION["username"] = $user->getUsername();
	        	$_SESSION["password"] = $user->getPassword();
	    	}else{
    			echo "admin username and password not setted";
	    	}
    	}else{
    		echo "action not setted";
    	}
	}else{
		echo "error";
	}
?>

