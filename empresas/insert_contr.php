﻿<?php
// Create connection
require('../configuraciones/conexionbd.php');
$query="INSERT INTO `empresa`(`nit`,`nombre`,`direccion`,`telefono`, `tipo`)
 		VALUES ('$_POST[nit]','$_POST[nombre]','$_POST[direccion]','$_POST[telefono]',"contratada")";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if($result){
	$query="INSERT INTO `contratada`(`nit`,`especialidad`)
 			VALUES ('$_POST[nit]','$_POST[especialidad]')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	if($result){
	    header ("Location: sede.php");
	}else{
	 	echo "Ha ocurrido un error al crear la sede";
	}
}else{
 	echo "Ha ocurrido un error al crear la sede";
}

?>