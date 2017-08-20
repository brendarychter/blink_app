<?php
	require('../global/recaptcha-master/src/autoload.php');
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

		/**
		
			TODO:
			- ADD CONSTRUCTORS:
				EMPTY
				USERID
				USERNAME AND PASSWORD
		
		 */
		

		public function getUser($connection, $username, $password){
			$consulta = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$matriz = array();

			if($response = mysqli_query($connection->connected, $consulta)){
				if(mysqli_num_rows($response)>=1){
					while($obj = mysqli_fetch_object($response)){
						$matriz = array('type'=> 'success', 'username' => $obj->username, 'password' => $obj->password, 'mail' => utf8_encode($obj->mail), 'phoneNumber' => $obj->phoneNumber, 'userID' => $obj->userID, 'active' => $obj->active);
						$this->setUserID($obj->userID);
					}
				}else{
	        		$matriz = array('type' => 'danger', 'message' => 'Error: revise sus datos.');
				}
			}
			$datos = json_encode($matriz);
			echo $datos;
		}

		public function activateUser($connection, $userID, $status){
			$consulta = "SELECT * FROM users WHERE userID = '$userID'";

			if($response = mysqli_query($connection->connected, $consulta)){
				if(mysqli_num_rows($response)>=1){
					$query ="UPDATE users SET active='$status' WHERE userID='$userID'";
					if($response = mysqli_query($connection->connected, $query)){
						echo true;
					}
				}else{
					echo "no";
				}
			}
		}

		public function checkUser($connection){
			//VALIDAR QUE DEVUELVA TRUE
			$consulta = "SELECT * FROM users WHERE mail = '$this->mail'";

			$response = mysqli_query($connection->connected,$consulta);

			if(mysqli_num_rows($response)>=1){
           		$datos = json_encode(true);
           	}else{
           		$datos = json_encode(false);
           	}
           	echo $datos;
		}

		public function createNewUser($connection, $name, $username, $password, $email, $phone, $captcha, $datetime, $lan){

			// // remove all session variables
			// session_unset(); 

			// session_destroy(); 
			
       		$consulta = "SELECT * FROM users WHERE mail = '$email'";
			$response = mysqli_query($connection->connected, $consulta);

			if ($lan == "spanish"){
				$errorMail = 'Ya existe un usuario registrado con ese mail. Utilice otro.';

			}else if ($lan == "english"){
				$errorMail = 'A registered user already exists with that mail. Use another..';
			}

			if(!mysqli_num_rows($response)>=1){

				$consulta2 = "SELECT * FROM users WHERE username = '$username'";
				$response2 = mysqli_query($connection->connected, $consulta2);

				if ($lan == "spanish"){
					$errorUsername = 'Ya existe un usuario registrado con ese nombre. Escoja otro.';
				
				}else if ($lan == "english"){
					$errorUsername = 'A registered user already exists with that username. Use another..';
				}

				if(!mysqli_num_rows($response2)>=1){
					$sql = "insert into users (username, password, mail, name, phoneNumber, datetime, active) values ('$username','$password','$email', '$name', '$phone', '$datetime', '1')";
					if(mysqli_query($connection->connected, $sql)){
	        			$from = 'blinkthenewapp@gmail.com';
						$recipients = array( $email, "blinkthenewapp@gmail@gmail.com");
						$sendTo = implode(',', $recipients);
						$recaptchaSecret = '6Le78ScUAAAAALWRRZshuqD2iwNqp2m4ENHMIhvT';
        				$recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());
						
						if ($lan == "spanish"){
							$subject = $name . ', Blink App te da la bienvenida :)';
							$errorCaptcha = 'El ReCaptcha no se valido correctamente.';
							$successLogIn = 'Se ha registrado exitosamente. Revisa tu correo electronico';
							$emailText = 'Ya formas parte de nuestra comunidad. ¡¡Encontrate con tus amigos y empeza a disfrutar!!';

						}else if ($lan == "english"){
							$subject = $name . ', Blink App welcomes you :)';
							$errorCaptcha = 'Captcha is not valid';
							$successLogIn = 'You have successfully registered. Check your email';
							$emailText = 'You are already part of our community. Meet your friends and start enjoying !!';
						}

        				$response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);


				        if (!$response->isSuccess()) {
	        				$responseArray = array('type' => 'success', 'message' => $errorCaptcha);
				        }

				        $headers = array('Content-Type: text/plain; charset="UTF-8";',
				            'From: ' . $from,
				            'Reply-To: ' . $from,
				            'Return-Path: ' . $from,
				        );

				        mail($sendTo, $subject, $emailText, implode("\n", $headers));

	        			$responseArray = array('type' => 'success', 'message' => $successLogIn);
					}
				}else{
	        		$responseArray = array('type' => 'danger', 'message' => $errorUsername);
				}
			}else{
	        	$responseArray = array('type' => 'danger', 'message' => $errorMail);
			}
    		
    		$encoded = json_encode($responseArray);
			echo $encoded;
         
		}

		public function getAllUsers($connection){
			$consulta = "SELECT * FROM users";
			$response = mysqli_query($connection->connected,$consulta);

			while($obj = mysqli_fetch_object($response)){
				$matriz[] = array('name' => $obj->name, 'username' => $obj->username, 'password' => $obj->password, 'userID' => $obj->userID, 'mail' => $obj->mail, 'phoneNumber' => $obj->phoneNumber, 'datetime' => $obj->datetime, 'active' => $obj->active);
			}

			$datos = json_encode($matriz);
			echo $datos;
		}


		public function updateUser($connection){
			$query ="UPDATE users SET mail='$this->mail', phoneNumber='$this->phoneNumber' WHERE userID='$this->userID'";
			
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





