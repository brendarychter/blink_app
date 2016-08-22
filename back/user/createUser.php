<?php
	// require_once("../admin/connection.php");
 //    $connection = new connection;
	$conn = mysqli_connect("localhost", "root", "", "blink");

	// if(!mysqli_connect_error()){


	// 	//Falta el timestamp y el GMT
	// 	$query = "INSERT INTO users (username) VALUES ('brenda')";

	// 	if ($connection->query($sql) === TRUE) {
	// 	if (mysqli_connect_errno())
	// 	if(mysqli_query($connection,$query)){
	// 		echo"exito";
		
	// 	}else{
	// 		echo"error";

	// 	}
	// }else{
	// 	echo "error";
	// }


	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$username = $_POST["username-signin"];
	$password = $_POST["password-signin"];
	$email = $_POST["mail-signin"];
	$mobile = $_POST["mobile-signin"];

	//Falta el timestamp y el GMT
	$query = "INSERT INTO users (username, password, mail, phoneNumber) VALUES ('$username', '$password', '$email', '$mobile')";

	if ($conn->query($query) === TRUE) {
	    echo "Usuario registrado correctamente. Redireccionando a la home";
	} else {
	    echo "Error: " . $query . "<br>" . $conn->error;
	}
?>
