﻿<?php
require('../configuraciones/conexionbd.php');
$nombre=$_POST[`nombre`];

if($nombre===""){
	$query="INSERT INTO `evento`(`nit`,`razon`,`fecha`,`presupuesto`, `nombre`)
 	VALUES ('$_POST[nit]','$_POST[razon]','$_POST[fecha]','$_POST[presupuesto]',NULL)";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	}else{
	$query="INSERT INTO `evento`(`nit`,`razon`,`fecha`, `presupuesto`,`nombre`)
 		VALUES ('$_POST[nit]','$_POST[razon]','$_POST[fecha]','$_POST[presupuesto]','$_POST[nombre]')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	}
if($result){
	if($result){
	    header ("Location: eventos.php");
	}else{
	 	echo "Ha ocurrido un error al crear el evento";
	}
}else{
 	echo "Ha ocurrido un error al crear el evento";
}




?>
