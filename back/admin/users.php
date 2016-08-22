<?php
	require_once("connection.php");
    $connection = new connection;

	//si esta establecida la conexion
	if(!mysqli_connect_error()){

		$consulta = "SELECT * FROM users";
		$response = mysqli_query($connection->connected,$consulta);

		while($obj = mysqli_fetch_object($response)){
			$matriz = array('username' => $obj->username, 'password' => $obj->password, 'mail' => utf8_encode($obj->mail), 'phoneNumber' => $obj->phoneNumber, 'userID' => $obj->userID);
		}
		$datos = json_encode($matriz);
		echo $datos;
	}else{
		echo "error";
	}
?>