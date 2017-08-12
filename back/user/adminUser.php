<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	
	require("User.php");

	if(!mysqli_connect_error()){

    	if(isset($_POST['action'])){
    		$action = $_POST['action'];
    		

    		if ($action == "createNewUser"){
    			if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
	        		$responseArray = array('type' => 'danger', 'message' => 'Valide el ReCaptcha.');
	        		$encoded = json_encode($responseArray);
					echo $encoded;
		      	}else{
	    			$name = $_POST['nombre-usuario'];
	    			$username = $_POST['username-usuario'];
	    			$password = $_POST['password-usuario'];
	    			$email = $_POST['email-usuario'];
	    			$phone = $_POST['phone-usuario'];
	    			$captcha = $_POST['g-recaptcha-response'];
	    			//$photo = $_POST['imagen-usuario'];
					$datetime = $_POST["datetime"];

	    			$user = new User;

	    			$user->createNewUser($connection, $name, $username, $password, $email, $phone, $captcha, $datetime);
		        }
    		}else{
	    		if(isset($_POST['username']) && isset($_POST['password'])){
	    			$user = new User;
		        	$username = $_POST['username'];
		        	$password = $_POST['password'];

		    		switch($action){
		    			case "getUser":
				        	$user->getUser($connection, $username, $password);
		        			$_SESSION["userID"] = $user->getUserID();
				        break;

				        case "createUser":
				        	$user->setUsername($_POST['username']);
		        			$user->setPassword($_POST['password']);
				        	$user->setPhoneNumber($_POST['phoneNumber']);
		        			$user->setMail($_POST['mail']);
				        	$user->createUser($connection);
				        	$_SESSION["userID"] = $user->getUserID();
				        break;

				        case "updateUser":
				        	$user->setUserID($_SESSION["userID"]);
				        	$user->setUsername($_POST['username']);
		        			$user->setPassword($_POST['password']);
		        			$user->setMail($_POST['mailUpdate']);
		        			$user->setPhoneNumber($_POST['phoneNumberUpdate']);

		        			$_SESSION["userID"] = $user->getUserID();

				        	$user->updateUser($connection);
		        			$_SESSION["mail"] = $user->getMail();
		        			$_SESSION["phoneNumber"] = $user->getPhoneNumber();

				        break;	

				        case "deleteUser":
				        	$user->setUsername($_POST['username']);
		        			$user->setPassword($_POST['password']);
				        	$user->setUserID($_SESSION["userID"]);
				        	$user->deleteUser($connection);
				        break;

				        case "getAllUsers":
				        	$user->setUsername($_POST['username']);
		        			$user->setPassword($_POST['password']);
				        	$user->getAllUsers($connection, $user->getUserID());
				        break;
		    		}
		    		//VALIDAR ESTO
		    		$_SESSION["username"] = $user->getUsername();
		        	$_SESSION["password"] = $user->getPassword();
		    	}else{
	    			echo "username and password not setted";
		    	}
    		}
    	}else{
    		echo "action not setted";
    	}
	}else{
		echo "error";
	}
?>

