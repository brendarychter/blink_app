<?php
	require_once("../admin/connection.php");
    $connection = new connection;
	if($connection->connected){
		$username= $_POST["username-logged"];
		$password= $_POST["password-logged"];

		$consulta ="DELETE FROM users WHERE username='$username' AND password='$password'";

		if(mysqli_query($connection->connected,$consulta)){
			echo "eliminado correctamente";
		}else{
			echo "error";
		}
	}
?>