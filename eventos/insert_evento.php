<?php
$host = "localhost";
$user = "root";
$pass = "root";
$DB = "trabajobd";
$conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));
$nombre=$_POST[`nombre_evento`];

if($nombre===""){
   $query="INSERT INTO `evento`(`razon`,`fecha`,`presupuesto`, `nombre_evento`,`ubicacion`,`nit`)
	VALUES ('$_POST[razon]','$_POST[fecha]','$_POST[presupuesto]','$_POST[nombre_evento]','$_POST[ubicacion]','$_POST[nit]')";
   $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
}else{
   $query="INSERT INTO `evento`(`razon`,`fecha`, `presupuesto`,`nombre_evento`,`ubicacion`,`nit`)
		VALUES ('$_POST[razon]','$_POST[fecha]','$_POST[presupuesto]','$_POST[nombre_evento]','$_POST[ubicacion]','$_POST[nit]')";
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
