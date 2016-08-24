<?php
	session_start();
	require_once("../admin/connection.php");
    $connection = new connection;

	class User{

		private $username;
		private $password;
		private $mail;
		private $phoneNumber;


		public function getUser($connection, $userID){
			if(!mysqli_connect_error()){
				$username = $_POST["username-login"];
			   	$password = $_POST["password-login"];

				$consulta = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
				$response = mysqli_query($connection->connected,$consulta);

				while($obj = mysqli_fetch_object($response)){
					$matriz = array('username' => $obj->username, 'password' => $obj->password, 'mail' => utf8_encode($obj->mail), 'phoneNumber' => $obj->phoneNumber);
				}
				$datos = json_encode($matriz);
				echo $datos;
			}else{
				echo "error";
			}
		}

		public function createUser(){
			$username = $_POST["username-signin"];
			$password = $_POST["password-signin"];
			$email = $_POST["mail-signin"];
			$mobile = $_POST["mobile-signin"];

			//Falta el timestamp y el GMT
			$query = "INSERT INTO users (username, password, mail, phoneNumber) VALUES ('$username', '$password', '$email', '$mobile')";

			if ($conn->query($query) === TRUE) {
			    echo "Usuario registrado correctamente. Redireccionando a la home";
			} else {
			    echo "Error: " . $query . "<br>" . $conn->error;
			}
		}

		public function updateUser(){
			if(establishConnection()){
				$userID = $_SESSION["userID"];
				$username = $_POST["username-logged"];
				$password = $_POST["password-logged"];
				$mail = $_POST["mail-logged"];
				$mobile = $_POST["mobile-logged"];

				$consulta ="UPDATE users SET username='$username', password='$password', phoneNumber='$mobile', mail='$mail' WHERE userID='$userID'";
				$query2 = "SELECT * FROM users WHERE userID='$userID'";
				
				if(mysqli_query($connection->connected,$consulta)){
					
					$response = mysqli_query($connection->connected,$query2);
					while($obj = mysqli_fetch_object($response)){
						$matriz = array('username' => $obj->username, 'password' => $obj->password, 'mail' => utf8_encode($obj->mail), 'phoneNumber' => $obj->phoneNumber);
					}
					$datos = json_encode($matriz);
					echo $datos;
				}else{
					echo "Error";
				}
			}
		}

		public function deleteUser(){
			if(establishConnection()){
				$username= $_POST["username-logged"];
				$password= $_POST["password-logged"];

				$consulta ="DELETE FROM users WHERE username='$username' AND password='$password'";

				if(mysqli_query($connection->connected,$consulta)){
					echo "eliminado correctamente";
				}else{
					echo "error";
				}
			}
		}

		public function establishConnection(){
			$connection = new connection;
			if($connection->connected){
				return true;
			}else{
				return "error message";
			}
		}
	}
?>





