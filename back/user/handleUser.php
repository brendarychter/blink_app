<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;

	if(!mysqli_connect_error()){

    	if(isset($_POST['action'])){
    		$action = $_POST['action'];
    	}else{
    		echo "error action";
    	}
	}else{
		echo "error conexion";
	}
?>