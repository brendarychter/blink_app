<?php
	class Content{
		private $value_id;
		private $value;
		private $spanish;
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
			return $this->spanish;
		}

		public function setSpanishValue($spanishValue){
			$this->spanish = $spanishValue;
		}

		public function getValueID(){
			return $this->value_id;
		}

		public function setValueID($value_id){
			$this->value_id = $value_id;
		}

		public function getHomeContent($connection, $table){
			//VALIDAR QUE DEVUELVA TRUE
			$query = "SELECT * FROM $table";
			$response = mysqli_query($connection->connected,$query);

			while($obj = mysqli_fetch_object($response)){
				$matriz[$obj->value] = array('spanish' => utf8_encode($obj->spanish), 'english' => $obj->english, 'visible' => $obj->visible, 'section' => $obj->section);
			}
			//, 'value_id' => $obj->value_id
			$datos = json_encode($matriz);
			echo $datos;
		}
		/*envio de form*/

		//CADA ROW TIENE QUE SER UNA INSTANCIA DE LA CLASE CONTENT
		public function modifyHomeContent($connection, $newValue, $realValue, $language, $table){
			//VALIDAR QUE DEVUELVA TRUE
			$query = "UPDATE $table SET $language='$newValue' WHERE value='$realValue'";
			echo $query;
			if (mysqli_query ($connection->connected, $query)) {
			    echo "Escribio.";
			} else {
			    echo "Error updating";
			}
		}

		//CADA ROW TIENE QUE SER UNA INSTANCIA DE LA CLASE CONTENT
		public function updateMenu($connection, $newValue, $realValue, $language){
			//VALIDAR QUE DEVUELVA TRUE
			$query = "UPDATE menu SET $language='$newValue' WHERE value='$realValue'";
			echo $query;
			if (mysqli_query ($connection->connected, $query)) {
			    echo "Escribio.";
			} else {
			    echo "Error updating";
			}
		}

		public function getMenu($connection){
			$query = "SELECT * FROM menu";
			$response = mysqli_query($connection->connected,$query);

			while($obj = mysqli_fetch_object($response)){
				$matriz[$obj->value] = array('spanish' => $obj->spanish, 'english' => $obj->english, 'id_menu' => $obj->id_menu, 'visible' => $obj->visible);
			}
			$datos = json_encode($matriz);
			echo $datos;
		}

		public function showContent($connection, $val, $flag, $table){
			$query = "UPDATE $table SET visible='$flag' WHERE section='$val'";
			echo $query;
			if (mysqli_query ($connection->connected, $query)) {
			    echo "Escribio.";
			} else {
			    echo "Error updating";
			}
		}

		public function showAndHideMenu($connection, $value, $flag){
			$query = "UPDATE menu SET visible='$flag' WHERE value='$value'";
			if (mysqli_query ($connection->connected, $query)) {
			    echo "Escribio.";
			} else {
			    echo "Error updating";
			}
		}
	}
?>