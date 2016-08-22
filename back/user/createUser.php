<?php
	session_start();
	require_once("../admin/connection.php");
 	$connection = new connection;

	$username = $_POST["username-signin"];
	$password = $_POST["password-signin"];
	$email = $_POST["mail-signin"];
	$mobile = $_POST["mobile-signin"];

	//Falta el timestamp y el GMT
	$query = "INSERT INTO users (username, password, mail, phoneNumber) VALUES ('$username', '$password', '$email', '$mobile')";

	if ($connection->connected->query($query) === TRUE) {
	    echo "Usuario registrado correctamente. Redireccionando a la home";
	    $query2 = "SELECT userID FROM users WHERE username='$username' AND password='$password'";

		if($datos= mysqli_query($connection->connected,$query2)){
			$fila=mysqli_fetch_array($datos);
			$userID=$fila["userID"];
			$_SESSION["userID"] = $userID;
		}
	} else {
	    echo "Error: " . $query . "<br>" . $connection->connected->error;
	}
?>
