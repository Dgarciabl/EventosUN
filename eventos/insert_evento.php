﻿<?php
$host = "localhost";
$user = "root";
$pass = "root";
$DB = "trabajobd";
$conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));
$nombre=$_POST[`nombre`];

if($nombre===""){
   $query="INSERT INTO `evento`(`cod_evento`,`razon`,`fecha`,`presupuesto`, `nombre`,`ubicacion`,`nit`)
	VALUES ('$_POST[cod_evento]','$_POST[razon]','$_POST[fecha]','$_POST[presupuesto]','$_POST[nombre]','$_POST[ubicacion]','$_POST[nit]')";
   $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
}else{
   $query="INSERT INTO `evento`(`cod_evento`,`razon`,`fecha`, `presupuesto`,`nombre`,`ubicacion`,`nit`)
		VALUES ('$_POST[cod_evento]','$_POST[razon]','$_POST[fecha]','$_POST[presupuesto]','$_POST[nombre]','$_POST[ubicacion]','$_POST[nit]')";
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
