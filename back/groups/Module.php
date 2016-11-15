<?php
	class Module{
		private $idGroup;
		private $groupName;
		private $idModule;

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


		//Crear nuevo grupo vacío???
		// function __construct(){
		// }

		//Esto o el constructor
		public function getGroupsByUser($connection, $userID){
			$query = "select * from modules inner join groups on groups.idGroup = modules.idGroup where modules.idUser = $userID";
			$response = mysqli_query($connection->connected,$query);

			while($obj = mysqli_fetch_object($response)){
				$matriz[] = array('idModule' => $obj->idModule, 'idGroup' => $obj->idGroup, 'groupName' => $obj->groupName);
			}
			if(!empty($matriz)){
				$datos = json_encode($matriz);
				echo $datos;
			}else{
				echo json_encode([]);
			}
		}

		public function deleteGroup($connection){

		}

		public function updateGroup($connection){
			
		}
		
		public function createGroup($connection, $userID){
			// $query1 = "SELECT groupName FROM groups WHERE groupName='mejor'";
			// $result = mysqli_query($connection->connected,$query1);
			// if(mysqli_num_rows($result)>=1){
   //         		return false;
   //         	}else{
           		$query = "INSERT INTO groups (groupName) VALUES ('$this->groupName')";
				if (mysqli_query ($connection->connected, $query)) {
					$query2= "SELECT idGroup FROM groups WHERE groupName='$this->groupName'";
					
					$query = "INSERT INTO modules (groupName) VALUES ('$this->groupName')";
				    $this->getGroupsByUser($connection, $userID);
				} else {
				    echo "Error en la creacion del grupo.";
				}
           	// }
		}
	}
?>





