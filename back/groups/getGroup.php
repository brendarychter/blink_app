<?php
	session_start();
	require_once("../admin/connection.php");
 	$connection = new connection;

	//VALIDAR QUE DEVUELVA TRUE
	$query = "select * from modules inner join groups on groups.idGroup = modules.idGroup where modules.idUser = 1";
	$response = mysqli_query($connection->connected,$query);

	while($obj = mysqli_fetch_object($response)){
		$matriz[] = array('idModule' => $obj->idModule, 'idGroup' => $obj->idGroup, 'groupName' => $obj->groupName);
	}
	$datos = json_encode($matriz);
	echo $datos;

?>
