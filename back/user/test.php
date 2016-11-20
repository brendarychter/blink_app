<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	//Falta el timestamp y el GMT
	// remove all session variables

	//VALIDAR QUE DEVUELVA TRUE
        $consulta = "SELECT * FROM fotos WHERE table_name = 'works'";
        $response = mysqli_query($connection->connected,$consulta);

        while($obj = mysqli_fetch_object($response)){
            $matriz[$obj->table_name][] = array('id_name' => $obj->id_name, 'section' => $obj->section, 'img' => basename($obj->img), 'nombre' => $obj->nombre, 'id_image' => $obj->id_image, 'num' => $obj->num);
        }
        $datos = json_encode($matriz);
        echo $datos;
?>