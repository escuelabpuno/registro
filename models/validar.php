<?php
sleep(1);
include('conexion.php');
if($_REQUEST) {
    $dni = $_REQUEST['dni'];
    if($dni ==""){
    	echo '<div class="has-error">Ingrese numero de DNI</div>';
    }
    elseif(strlen($dni) < 8){
    	echo '<div class="has-error">El numero de dni debe tener 8 caracteres</div>';
    }else{
    	$query = "select * from usuarios where dni = '".strtolower($dni)."'";
	    $results = mysql_query( $query) or die('ok');

	    if(mysql_num_rows(@$results) > 0)
	        echo '<div class="has-error">El numero de DNI ya esta registrado en escuelab</div>';
	    else
	        echo '<div class="has-success">DNI válido :)</div>';
    }    
}
?>