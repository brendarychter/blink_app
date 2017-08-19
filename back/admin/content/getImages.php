<?	//VALIDAR QUE DEVUELVA TRUE
	session_start();
	require_once("../connection.php");
    $connection = new connection;
	
	require("Content.php");
	$table_name = $_POST["tableName"];

	if(isset($table_name)){
		$consulta = "SELECT * FROM fotos WHERE table_name = '$table_name'";
	    $response = mysqli_query($connection->connected,$consulta);
	    if(mysqli_num_rows($response)>=1){
		    while($obj = mysqli_fetch_object($response)){
	            $matriz[$obj->table_name][] = array('id_name' => $obj->id_name, 'section' => $obj->section, 'img' => basename($obj->img), 'nombre_es' => $obj->nombre_es, 'nombre_en' => $obj->nombre_en, 'id_image' => $obj->id_image, 'position' => $obj->position);
		    }
		    $datos = json_encode($matriz);
		    echo $datos;
		}
	}
?>