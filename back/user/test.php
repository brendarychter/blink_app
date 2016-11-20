<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	//Falta el timestamp y el GMT
	// remove all session variables

	//VALIDAR QUE DEVUELVA TRUE
   $query = "UPDATE menu SET visible='0' WHERE value='blink_menu'";
            echo $query;
            if (mysqli_query ($connection->connected, $query)) {
                echo "Escribio.";
            } else {
                echo "Error updating";
            }
?>