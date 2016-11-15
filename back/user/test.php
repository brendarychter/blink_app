<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;
	//Falta el timestamp y el GMT
	// remove all session variables

	$query = "select * from modules inner join groups on groups.idGroup = modules.idGroup where modules.idUser = 104";
	$response = mysqli_query($connection->connected,$query);

	while($obj = mysqli_fetch_object($response)){
		$matriz[] = array('idModule' => $obj->idModule, 'idGroup' => $obj->idGroup, 'groupName' => $obj->groupName);
	}
	if(!empty($matriz)){
		$datos = json_encode($matriz);
		echo $datos;
	}else{
		echo json_encode([]);
	}
?>