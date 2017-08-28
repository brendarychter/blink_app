<?php
	require_once("connection.php");
    $connection = new connection;

    if(!mysqli_connect_error()){
    	$idGroup = $_POST["idGroup"];
		$consulta = "select * from texts inner join users on users.userID = texts.idUser inner join groups on groups.idGroup = texts.idGroup";
		$response = mysqli_query($connection->connected,$consulta);

		while($obj = mysqli_fetch_object($response)){
			if($obj->active){
				$matriz[] = array('idText' => $obj->idText, 'texto' => utf8_encode($obj->texto), 'idUser' => $obj->idUser, 'idGroup' => $obj->idGroup, 'datetimeText' => $obj->datetimeText, 'username' => $obj->username, 'photo' => $obj->photo, 'groupName' => $obj->groupName);
			}
		}

		/*foreach ($usersList as $value) {
						    $consulta4 = "INSERT INTO modules (idGroup, idUser, idType) VALUES ('$idGroup', '$value', 1)";
							if (mysqli_query ($connection->connected, $consulta4)) {
								$responseArray = array('type' => 'success', 'message' => 'ok');
							}
						}*/
		$datos = json_encode($matriz);
		echo $datos;
	}else{
		echo "error en conexion";
	}
?>