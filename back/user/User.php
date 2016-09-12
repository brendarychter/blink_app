<?php
	class User{
		private $username;
		private $password;
		private $mail;
		private $phoneNumber;
		private $picture;
		private $userID;


		/*Getters & setters properties*/
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

		public function getPhoneNumber(){
			return $this->phoneNumber;
		}
		public function setPhoneNumber($mobile){
			$this->phoneNumber = $mobile;
		}
		public function getMail(){
			return $this->mail;
		}
		public function setMail($mail){
			$this->mail = $mail;
		}

		public function getUserID(){
			return $this->userID;
		}
		public function setUserID($userID){
			$this->userID = $userID;
		}


		public function getUser($connection){
			//VALIDAR QUE DEVUELVA TRUE
			$consulta = "SELECT * FROM users WHERE username = '$this->username' AND password = '$this->password'";
			$response = mysqli_query($connection->connected,$consulta);

			while($obj = mysqli_fetch_object($response)){
				$matriz = array('username' => $obj->username, 'password' => $obj->password, 'mail' => utf8_encode($obj->mail), 'phoneNumber' => $obj->phoneNumber, 'userID' => $obj->userID);
				$this->setUserID($obj->userID);
			}
			//, 'userID' => $obj->userID
			$datos = json_encode($matriz);
			echo $datos;
		}

		public function createUser($connection){
			//Falta el timestamp y el GMT
			// remove all session variables
			session_unset(); 

			// destroy the session 
			session_destroy(); 
			$query = "INSERT INTO users (username, password, mail, phoneNumber) VALUES ('$this->username', '$this->password', '$this->mail', '$this->phoneNumber')";
			if (mysqli_query ($connection->connected, $query)) {
				session_start();
			    $this->getUserByID($connection);
			} else {
			    echo "Error en la creacion del usuario.";
			}
		}

		public function updateUser($connection){
			$query ="UPDATE users SET mail='$this->mail' WHERE userID='$this->userID'";
			
			if(mysqli_query($connection->connected, $query)){
				$this->getUserByID($connection);
			}else{
				echo "Error en la modificacion de datos del usuario.";
			}
		}

		public function getUserByID($connection){
			$query = "SELECT * FROM users WHERE userID='$this->userID'";
			$response = mysqli_query($connection->connected,$query);

			while($obj = mysqli_fetch_object($response)){
				$matriz = array('username' => $obj->username, 'password' => $obj->password, 'mail' => utf8_encode($obj->mail), 'phoneNumber' => $obj->phoneNumber, 'userID' => $obj->userID);
				$this->setUserID($obj->userID);
			}
			$datos = json_encode($matriz);
			echo $datos;
		}

		public function deleteUser($connection){
			$query ="DELETE FROM users WHERE userID='$this->userID'";

			if(mysqli_query($connection->connected,$query)){
				return "true";
			}else{
				return "false";
			}
		}
	}
?>





