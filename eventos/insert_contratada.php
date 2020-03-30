<?php
$host = "localhost";
$user = "trabajobd";
$pass = "trabajobd";
$DB = "trabajobd";
$conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));

$query="INSERT INTO `evento`(`cod_evento`,`tipo`,`fecha`,`presupuesto`, `nombre`)
 		VALUES ('$_POST[cod_evento]','$_POST[tipo]','$_POST[fecha]','$_POST[presupuesto]','nombre')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if($result){
	$query="INSERT INTO `contratada`(`nit`,`especialidad`)
 			VALUES ('$_POST[nit]','$_POST[subtipo]')";
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
