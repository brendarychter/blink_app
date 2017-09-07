<?
	session_start();
	require_once("../connection.php");
    $connection = new connection;
	
	$src = $_POST["src"];
	$id = $_POST["id"];
	$consulta = "UPDATE videos SET src='$src' WHERE id_video='$id'";

	if (mysqli_query ($connection->connected, $consulta)) {
	    echo "Escribio.";
	} else {
	    echo "Error updating";
	}
?>