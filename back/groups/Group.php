<?php
	class User{
		private $idGroup;
		private $groupName;


		/*Getters & setters properties*/
		public function getGroupName(){
			return $this->groupName;
		}
		public function setGroupName($nom){
			$this->groupName = $nom;
		}
		public function getGroupID(){
			return $this->password;
		}
		public function setGroupID($id){
			$this->idGroup = $id;
		}


		public function getGroupsByUser($connection, $userID){
			$query = "SELECT * FROM modules INNER JOIN users ON modules.idUser = 1 INNER JOIN groups ON modules.idGroup = groups.idGroup INNER JOIN types ON modules.idType = types.idType";
			$response = mysqli_query($connection->connected,$query);

			while($obj = mysqli_fetch_object($response)){
				$matriz = array('idModule' => $obj->idModule, 'idGroup' => $obj->idGroup, 'groupName' => $obj->groupName);
			}

			
			$datos = json_encode($matriz);
			echo $datos;
		}
	}
?>





