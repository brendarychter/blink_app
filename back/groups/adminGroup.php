<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;

    $conn = mysqli_connect("localhost", "root", "", "blink");
    
	class group{

		private $username;
		private $password;
		private $mail;
		private $phoneNumber;
	}

?>