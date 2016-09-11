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
				$matriz = array('username' => $obj->username, 'password' => $obj->password, 'mail' => utf8_encode($obj->mail), 'phoneNumber' => $obj->phoneNumber);
			}
			//, 'userID' => $obj->userID
			$datos = json_encode($matriz);
			//$this->setUserID($datos->userID);
			echo $datos;
		}

		public function createUser($connection){
			//Falta el timestamp y el GMT
			$query = "INSERT INTO users (username, password, mail, phoneNumber) VALUES ('$this->username', '$this->password', '$this->mail', '$this->phoneNumber')";
			if (mysqli_query ($connection->connected, $query)) {
			    $this->getUser($connection);
			} else {
			    echo "Error: " . $query . "<br>" . $connection->connected->error;
			}
		}
	}
?>





