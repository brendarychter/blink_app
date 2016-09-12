<?php
	session_start();
	require_once("../admin/connection.php");
 	$connection = new connection;

	//VALIDAR QUE DEVUELVA TRUE
	$query = "SELECT * FROM modules INNER JOIN users ON modules.idUser = 1 INNER JOIN groups ON modules.idGroup = groups.idGroup INNER JOIN types ON modules.idType = types.idType";
	$response = mysqli_query($connection->connected,$query);

	while($obj = mysqli_fetch_object($response)){
		$matriz = array('idModule' => $obj->idModule, 'idGroup' => $obj->idGroup, 'groupName' => $obj->groupName);
	}
	$datos = json_encode($matriz);
	echo $datos;

?>
