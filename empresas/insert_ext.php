<?php
 
// Create connection
require('../configuraciones/conexionbd.php');

$codigo = $_POST["codigo"];
$email = $_POST["email"];

//query
if($codigo<0){
	echo "codigo debe ser positivo";
}

else{
	if($email===""){
	$query="INSERT INTO `sede`(`codigo`,`direccion`,`municipio`,`nombre`, `telefono`,`email`)
 	VALUES ('$_POST[codigo]','$_POST[direccion]','$_POST[municipio]','$_POST[name]','$_POST[telefono]',NULL)";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	}else{
	$query="INSERT INTO `sede`(`codigo`,`direccion`,`municipio`,`nombre`, `telefono`,`email`)
 	VALUES ('$_POST[codigo]','$_POST[direccion]','$_POST[municipio]','$_POST[name]','$_POST[telefono]','$_POST[email]')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	}
 		if($result){
        	header ("Location: sede.php");
        
         
 		}else{
 		echo "Ha ocurrido un error al crear la sede";
 		}


}

?>
