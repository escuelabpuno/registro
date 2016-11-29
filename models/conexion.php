<?php
	$server = "localhost";
	$usuario = "root";
	$password = "";
	$db = "registro_escuelab";
	$link = mysql_connect($server, $usuario, $password);
	mysql_select_db($db, $link) OR DIE (
		"Error: no es posible establecer la conexion con la DB :("
	);
?>