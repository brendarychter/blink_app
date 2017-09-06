<?
	session_start();
	require_once("../connection.php");
    $connection = new connection;
	
	$table = $_POST["table"];
	$matriz = array();

	if(isset($table_name)){
		$consulta = "SELECT * FROM videos WHERE table_name = '$table'";
	    if($response = mysqli_query($connection->connected, $consulta)){
			if(mysqli_num_rows($response)>=1){
				$matriz = array('id_video' => $obj->id_video, 'src' => $obj->src, 'table_name' => $obj->table_name);
		    }
		    $datos = json_encode($matriz);
		    echo $datos;
		}
	}
?>