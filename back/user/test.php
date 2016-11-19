<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	//Falta el timestamp y el GMT
	// remove all session variables

	//VALIDAR QUE DEVUELVA TRUE
	$consulta = "SELECT * FROM fotos WHERE table_name = 'home' AND section = '1'";
    $response = mysqli_query($connection->connected,$consulta);

    while($obj = mysqli_fetch_object($response)){
        $matriz[] = array($obj->section => array('table_name' => $obj->table_name, 'img' => $obj->img, 'nombre' => $obj->nombre));
    }
    $datos = json_encode($matriz);
    echo $datos;
?>