<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	//Falta el timestamp y el GMT
	// remove all session variables

	//VALIDAR QUE DEVUELVA TRUE
    $query = "SELECT * FROM menu";
        $response = mysqli_query($connection->connected,$query);

        while($obj = mysqli_fetch_object($response)){
            $matriz[$obj->value] = array('spanish' => $obj->spanish, 'english' => $obj->english, 'id_menu' => $obj->id_menu);
        }
        $datos = json_encode($matriz);
        echo $datos;
?>