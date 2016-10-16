<?php
	require_once("../connection.php");
    $connection = new connection;

	$content = new Content;
	$content->getHomeContent($connection);

	class Content{
		private $value_id;
		private $value;
		private $spanishValue;
		private $englishValue;

		public function getValue(){
			return $this->value;
		}

		public function setValue($value){
			$this->value = $value;
		}

		public function getEnglishValue(){
			return $this->englishValue;
		}

		public function setEnglishValue($englishValue){
			$this->englishValue = $englishValue;
		}

		public function getSpanishValue(){
			return $this->spanishValue;
		}

		public function setSpanishValue($spanishValue){
			$this->spanishValue = $spanishValue;
		}

		public function getValueID(){
			return $this->value_id;
		}

		public function setValueID($value_id){
			$this->value_id = $value_id;
		}


		public function getHomeContent($connection){
			//VALIDAR QUE DEVUELVA TRUE
			$query = "SELECT * FROM home";
			$response = mysqli_query($connection->connected,$query);

			while($obj = mysqli_fetch_object($response)){
				$matriz[] = array('value' => $obj->value, 'spanishValue' => $obj->spanish, 'englishValue' => $obj->english, 'value_id' => $obj->value_id);
			}
			//, 'userID' => $obj->userID
			$datos = json_encode($matriz);
			echo $datos;
		}
	}
?>