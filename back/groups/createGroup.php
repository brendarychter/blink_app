<?php
	session_start();
	require_once("../admin/connection.php");
 	$connection = new connection;

	$name = $_POST["group-name"];

	//Falta el timestamp y el GMT
	$query = "INSERT INTO groups (name) VALUES ('$name')";

	if ($connection->connected->query($query) === TRUE) {
	    echo "Grupo registrado";
	} else {
	    echo "Error: " . $query . "<br>" . $connection->connected->error;
	}
?>
