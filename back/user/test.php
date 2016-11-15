<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	//Falta el timestamp y el GMT
	// remove all session variables

	$consulta = "SELECT * FROM users WHERE mail = 'brenda111@gmail.com'";
	$response = mysqli_query($connection->connected,$consulta);

			if(mysqli_num_rows($response)>=1){
           		$datos = json_encode(true);
           	}else{
           		$datos = json_encode(false);
           	}
           	echo $datos;
?>