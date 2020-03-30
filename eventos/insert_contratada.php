<?php
$host = "localhost";
$user = "trabajobd";
$pass = "trabajobd";
$DB = "trabajobd";
$conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));

$query="INSERT INTO `empresa`(`nit`,`nombre`,`direccion`,`telefono`, `tipo`)
 		VALUES ('$_POST[nit]','$_POST[nombre]','$_POST[direccion]','$_POST[telefono]','contratada')";
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
