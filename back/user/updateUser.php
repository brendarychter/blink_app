<?php
	require_once("../admin/connection.php");
	session_start();
    $connection = new connection;
	//si esta establecida la conexion
	if($connection->connected){
		$userID = $_SESSION["userID"];
		$username = $_POST["username-logged"];
		$password = $_POST["password-logged"];
		$mail = $_POST["mail-logged"];
		$mobile = $_POST["mobile-logged"];

		$consulta ="UPDATE users SET username='$username', password='$password', phoneNumber='$mobile', mail='$mail' WHERE userID='$userID'";
		//3.Ejecutr esa consulta en la base
		$query2 = "SELECT * FROM users WHERE userID='$userID'";
		
		if(mysqli_query($connection->connected,$consulta)){
			
			$response = mysqli_query($connection->connected,$query2);
			while($obj = mysqli_fetch_object($response)){
				$matriz = array('username' => $obj->username, 'password' => $obj->password, 'mail' => utf8_encode($obj->mail), 'phoneNumber' => $obj->phoneNumber);
			}
			$datos = json_encode($matriz);
			echo $datos;
		}else{
			echo "Error";
		}
	}
?>