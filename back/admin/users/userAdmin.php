<?php
	class userAdmin{
		private $username;
		private $password;
		private $name;
		private $email;

		private $adminID;


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

		public function getUserID(){
			return $this->adminID;
		}

		public function setUserID($adminID){
			$this->adminID = $adminID;
		}
		/**
		
			TODO:
			- ADD CONSTRUCTORS:
				EMPTY
				USERID
				USERNAME AND PASSWORD
		
		 */
		

		public function getUserAdmin($connection){
			//VALIDAR QUE DEVUELVA TRUE
			$consulta = "SELECT * FROM admin WHERE username = '$this->username' AND password = '$this->password'";
			$response = mysqli_query($connection->connected,$consulta);

			while($obj = mysqli_fetch_object($response)){
				$matriz = array('username' => $obj->username, 'password' => $obj->password);
				$this->setUserID($obj->id_admin);
			}
			//, 'userID' => $obj->userID
			$datos = json_encode($matriz);
			echo $datos;
		}

		public function createNewUser($connection, $name, $username, $password, $email){
			//Chequear si ya existe un usuario con el mismo mail

			$consulta = "SELECT * FROM admin WHERE mail = '$email'";
			$response = mysqli_query($connection->connected, $consulta);

			if(!mysqli_num_rows($response)>=1){
				echo ' no hay';
				$sql = "insert into admin (username, password, mail, name) values ('$username','$password','$email', '$name')";
				if(mysqli_query($connection->connected, $sql)){
					return true;
				}
			}else{
				echo 'Ya existe un usuario con ese mail';
				return false;
			}
			
		}
	}
?>





