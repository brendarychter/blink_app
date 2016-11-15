<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	//Falta el timestamp y el GMT
	// remove all session variables

	$query = "INSERT INTO groups (groupName) VALUES ('lala')";
				if (mysqli_query ($connection->connected, $query)) {
				    echo "Escribio";
				} else {
				    echo "Error en la creacion del grupo.";
				}
?>