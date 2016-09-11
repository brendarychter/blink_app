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
			        	$user->getUser($connection);
			        break;
	    		}
	    	}
    	}else{
    		echo "no";
    	}
		
	}else{
		echo "error";
	}

	// if(isset($username) && isset($password)){
		// 	$consulta = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		// 	$response = mysqli_query($connection->connected,$consulta);

		// 	while($obj = mysqli_fetch_object($response)){
		// 		$matriz = array('username' => $obj->username, 'password' => $obj->password, 'mail' => utf8_encode($obj->mail), 'phoneNumber' => $obj->phoneNumber);
		// 		$_SESSION["username"] = $obj->username;
		// 		$_SESSION["password"] = $obj->password;
		// 		$_SESSION["phoneNumber"] = $obj->phoneNumber;
		// 	}
		// 	$datos = json_encode($matriz);
			
		// 	echo $datos;
		// }
?>

