﻿<?php
require('../configuraciones/conexionbd.php');

$query="INSERT INTO `empresa`(`nit`,`nombre`,`direccion`,`telefono`, `tipo`)
 		VALUES ('$_POST[nit]','$_POST[nombre]','$_POST[direccion]','$_POST[telefono]','externa')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if($result){
	$query="INSERT INTO `externa`(`nit`,`representante`)
 			VALUES ('$_POST[nit]','$_POST[representante]')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	if($result){
	    header ("Location: empresas.php");
	}else{
	 	echo "Ha ocurrido un error al crear la empresa";
	}
}else{
 	echo "Ha ocurrido un error al crear la empresa";
}




?>
