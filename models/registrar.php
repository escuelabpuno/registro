<?php
include "conexion.php";

$dni = $_POST['dni'];
$nom_ap = $_POST['nom_ap'];
$edad = $_POST['edad'];
$celular = $_POST['celular'];
$institucion = $_POST['institucion'];
$email = $_POST['email'];
$hora_ingreso = $_POST['hora_ingreso'];
$motivo = $_POST['motivo'];

$insert = "INSERT INTO usuarios (dni, nom_ap, edad, celular, institucion, email, hora_ingreso, motivo) VALUES ('$dni', '$nom_ap', '$edad', '$celular', '$institucion', '$email', '$hora_ingreso', '$motivo')";
mysql_query($insert);


?>
