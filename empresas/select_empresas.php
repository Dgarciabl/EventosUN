<?php
 
// Create connection
$host = "localhost";
$user = "root";
$pass = "root";
$DB = "trabajobd";
$conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));;

//query
$query="SELECT *
 FROM empresa AS e  inner join  contratada AS con ON e.nit=con.nit";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
mysqli_close($conn);

?>