<?php
class usuario(){
	/*private $dni;
	private $nombre;
	private $edad;
	private $celular;
	private $institucion;
	private $email;
	private $hora_ingreso;
	private $motivo;*/
	private $conexion;
	public function __construct(){
		require_once('conexion.php');
		$this->conexion = new conexion();
		$this->conexion->conectar();
	}
	function registrar($dni, $nombres, $edad, $celular, $institucion, $email, $ingreso, $motivo){
		$pass = sha1($password);
		$sql = "INSERT INTO usuarios VALUES(0,'$dni','$nombres', '$edad', '$celular', '$institucion', '$email', '$ingreso', '$motivo')";
		if($this->conexion->conexion->query($sql)){
			return true;
		}else{
			return false;
		}
		$this->conexion->cerrar();
	}
}
?>