<?php
	require_once("../admin/connection.php");
    $connection = new connection;

	//si esta establecida la conexion
	if($conexion=mysqli_connect("localhost","root","","blink")){

		//2.Preparar la consulta SQL
			$id_categoria=$_POST["id_categoria"];
			$nombre_categoria=$_POST["nombre_categoria"];
			
			$consulta ="UPDATE users SET username='$nombre_categoria' WHERE id_categoria='$id_categoria'";
		//3.Ejecutr esa consulta en la base
			if(mysqli_query($conexion,$consulta)){
			echo"<p>Se ha modificado con éxito.</p>";
		echo"<ul><li><a href='admin_categories.php'>Volver</a> </li></ul>";
		}
	}
?>