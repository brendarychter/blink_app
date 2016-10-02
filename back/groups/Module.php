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

		function __construct($connection, $userID){
			$query = "select * from modules inner join groups on groups.idGroup = modules.idGroup where modules.idUser = $userID";
			$response = mysqli_query($connection->connected,$query);

			while($obj = mysqli_fetch_object($response)){
				$matriz[] = array('idModule' => $obj->idModule, 'idGroup' => $obj->idGroup, 'groupName' => $obj->groupName);
			}
			$datos = json_encode($matriz);
			echo $datos;
		}

		//Crear nuevo grupo vacío???
		// function __construct(){
		// }

		//Esto o el constructor
		// public function getGroupsByUser($connection, $userID){
		// 	$query = "select * from modules inner join groups on groups.idGroup = modules.idGroup where modules.idUser = $userID";
		// 	$response = mysqli_query($connection->connected,$query);

		// 	while($obj = mysqli_fetch_object($response)){
		// 		$matriz[] = array('idModule' => $obj->idModule, 'idGroup' => $obj->idGroup, 'groupName' => $obj->groupName);
		// 	}
		// 	$datos = json_encode($matriz);
		// 	echo $datos;
		// }

		public function deleteGroup($connection){

		}

		public function updateGroup($connection){
			
		}
		
	}
?>





