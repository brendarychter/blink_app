<?php 
	class connection{
		private $server = "localhost";
		private $user = "root";
		private $pass = "";
		private $bbdd = "blink";
		public $connected;
		
		function __construct(){
			$this->connected = @mysqli_connect($this->server, $this->user, $this->pass, $this->bbdd);
		}

	}
?>