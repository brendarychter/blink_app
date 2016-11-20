<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	//Falta el timestamp y el GMT
	// remove all session variables

	//VALIDAR QUE DEVUELVA TRUE
       $query = "SELECT * FROM 'home'";
        $response = mysqli_query($connection->connected,$query);

        while($obj = mysqli_fetch_object($response)){
            $matriz[$obj->value] = array('spanish' => $obj->spanish, 'english' => $obj->english, 'visible' => $obj->visible, 'section' => $obj->section);
        }
        //, 'value_id' => $obj->value_id
        // $datos = json_encode($matriz);
        // echo $datos;
?>