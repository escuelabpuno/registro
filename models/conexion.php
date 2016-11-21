<?php
	class conexion{
		private $servidor;
		private $usuario;
		private $password;
		private $basedatos;
		public  $conexion;

		public function __construct(){
			$this->servidor  = "localhost";
			$this->usuario   = "root";
			$this->password  = "";
			$this->basedatos = "escuelabform";
		}

		function conectar(){
			$this->conexion = new mysqli($this->servidor, $this->usuario, $this->password, $this->basedatos);
		}

		function cerrar(){
			$this->conexion->close();
		}
	}
?>
