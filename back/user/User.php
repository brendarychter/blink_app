<?php
	class User{
		private $username;
		private $password;
		private $mail;
		private $phoneNumber;
		private $picture;


		/*Getter y setter nombre*/
		public function getUsername(){
			return $this->username;
		}
		public function setUsername($nom){
			$this->username = $nom;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setPassword($pass){
			$this->password = $pass;
		}

		public function getUser($connection){
			$consulta = "SELECT * FROM users WHERE username = '$this->username' AND password = '$this->password'";
			$response = mysqli_query($connection->connected,$consulta);

			while($obj = mysqli_fetch_object($response)){
				$matriz = array('username' => $obj->username, 'password' => $obj->password, 'mail' => utf8_encode($obj->mail), 'phoneNumber' => $obj->phoneNumber);
			}
			$datos = json_encode($matriz);
			echo $datos;
		}
	}
?>





