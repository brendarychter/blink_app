<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	//Falta el timestamp y el GMT
	// remove all session variables

	//VALIDAR QUE DEVUELVA TRUE
	$query = "SELECT visible FROM home WHERE section ='0'";
			echo $query;
			if (mysqli_query ($connection->connected, $query)) {
			    echo "recibio.";
			} else {
			    echo "Error updating";
			}
?>