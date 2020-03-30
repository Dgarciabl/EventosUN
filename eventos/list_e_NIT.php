<?php
 
// Create connection
$host = "localhost";
$user = "root";
$pass = "root";
$DB = "trabajobd";
$conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));
$nombre=$_POST[`nombre`];
//query
$query="";
	$query="SELECT nit FROM empresa";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: eventos.php");
        
         
 	}else{
 		echo "Ha ocurrido un error al crear la garantia";
 	}

?>