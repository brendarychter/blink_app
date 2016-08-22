<?php
	require_once("../admin/connection.php");
    $connection = new connection;

	//si esta establecida la conexion
	if(!mysqli_connect_error()){
		$username = $_POST["username-login"];
    	$password = $_POST["password-login"];

		$consulta = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$response = mysqli_query($connection->connected,$consulta);

		while($obj = mysqli_fetch_object($response)){
			$matriz = array('username' => $obj->username);
		}
		$datos = json_encode($matriz);
		echo $datos;
	}else{
		echo "error";
	}

?>
