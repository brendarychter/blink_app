<?php
	require_once("connection.php");
    $connection = new connection;

    if(!mysqli_connect_error()){
		$consulta = "select * from texts inner join users on users.userID = texts.idUser inner join groups on groups.idGroup = texts.idGroup";
		$response = mysqli_query($connection->connected,$consulta);

		while($obj = mysqli_fetch_object($response)){
			if($obj->active){
				$matriz[] = array('idText' => $obj->idText, 'datetimeText' => $obj->datetimeText, 'texto' => utf8_encode($obj->texto), 'username' => $obj->username, 'mail' => $obj->mail, 'groupName' => $obj->groupName, 'idGroup' => $obj->idGroup);
			}
		}

		$datos = json_encode($matriz);
		echo $datos;
	}else{
		echo "error en conexion";
	}
?>