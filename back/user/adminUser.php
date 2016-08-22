<?php

	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;

	//si esta establecida la conexion
	if(!mysqli_connect_error()){
		$username = $_POST["username-login"];
    	$password = $_POST["password-login"];

		$consulta = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$response = mysqli_query($connection->connected,$consulta);

		while($obj = mysqli_fetch_object($response)){
			$matriz = array('username' => $obj->username, 'password' => $obj->password, 'mail' => utf8_encode($obj->mail), 'phoneNumber' => $obj->phoneNumber, 'userID' => $obj->userID);
		}
		$datos = json_encode($matriz);
		echo $datos;
	}else{
		echo "error";
	}



	// require_once("../admin/connection.php");
 //    $connection = new connection;

 //    $conn = mysqli_connect("localhost", "root", "", "blink");
	// class user{

	// 	private $username;
	// 	private $password;
	// 	private $mail;
	// 	private $phoneNumber;


	// 	public function getUser($connection, $userID){
	// 	}

	// 	public function createUser(){
	// 		$username = $_POST["username-signin"];
	// 		$password = $_POST["password-signin"];
	// 		$email = $_POST["mail-signin"];
	// 		$mobile = $_POST["mobile-signin"];

	// 		//Falta el timestamp y el GMT
	// 		$query = "INSERT INTO users (username, password, mail, phoneNumber) VALUES ('$username', '$password', '$email', '$mobile')";

	// 		if ($conn->query($query) === TRUE) {
	// 		    echo "Usuario registrado correctamente. Redireccionando a la home";
	// 		} else {
	// 		    echo "Error: " . $query . "<br>" . $conn->error;
	// 		}
	// 	}
	// }
?>





