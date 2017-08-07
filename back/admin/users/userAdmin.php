<?php
	require('../../global/recaptcha-master/src/autoload.php');
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
		

		public function getUserAdmin($connection, $username, $password){
			//VALIDAR QUE DEVUELVA TRUE
			$consulta = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
			$matriz = array();

			if($response = mysqli_query($connection->connected, $consulta)){
				if(mysqli_num_rows($response)>=1){
					while($obj = mysqli_fetch_object($response)){
						$matriz = array('type'=> 'success', 'username' => $obj->username, 'password' => $obj->password);
						$this->setUserID($obj->id_admin);
					}
				}else{
	        		$matriz = array('type' => 'danger', 'message' => 'Error: revise sus datos.');
				}
			}
			//, 'userID' => $obj->userID
			$datos = json_encode($matriz);
			echo $datos;
		}

		public function createNewUser($connection, $name, $username, $password, $email, $captcha){
			//Chequear si ya existe un usuario con el mismo mail

			$consulta = "SELECT * FROM admin WHERE mail = '$email'";
			$response = mysqli_query($connection->connected, $consulta);

			if(!mysqli_num_rows($response)>=1){

				$consulta2 = "SELECT * FROM admin WHERE username = '$username'";
				$response2 = mysqli_query($connection->connected, $consulta2);

				if(!mysqli_num_rows($response2)>=1){
					$sql = "insert into admin (username, password, mail, name) values ('$username','$password','$email', '$name')";
					
					if(mysqli_query($connection->connected, $sql)){
	        			$from = 'brendarychter@gmail.com';
						$sendTo = $email;
						$recaptchaSecret = '6Le78ScUAAAAALWRRZshuqD2iwNqp2m4ENHMIhvT';
        				$recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());
						$subject = 'New message from contact form';

        				$response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);


				        if (!$response->isSuccess()) {
	        				$responseArray = array('type' => 'success', 'message' => 'El ReCaptcha no se valido correctamente.');
				        }

				        $emailText = "Bienvenido a la plataforma de administracion de Blink App";


				        $headers = array('Content-Type: text/plain; charset="UTF-8";',
				            'From: ' . $from,
				            'Reply-To: ' . $from,
				            'Return-Path: ' . $from,
				        );

				        mail($sendTo, $subject, $emailText, implode("\n", $headers));


	        			$responseArray = array('type' => 'success', 'message' => 'Se ha registrado exitosamente. Revisa tu correo electronico');
					}
				}else{
	        		$responseArray = array('type' => 'danger', 'message' => 'Ya existe un usuario con ese nombre. Escoja otro.');
				}
			}else{
	        	$responseArray = array('type' => 'danger', 'message' => 'Ya existe un usuario con ese mail. Utilice otro.');
			}
    		
    		$encoded = json_encode($responseArray);
			echo $encoded;

		}
	}
?>





