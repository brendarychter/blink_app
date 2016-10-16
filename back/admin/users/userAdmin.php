<?php
	class userAdmin{
		private $username;
		private $password;
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
	}
?>





