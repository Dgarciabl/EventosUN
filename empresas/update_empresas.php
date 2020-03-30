<?php
 
// Create connection
$host = "localhost";
$user = "trabajobd";
$pass = "trabajobd";
$DB = "trabajobd";
$conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));

//query
$query="UPDATE empresa SET nombre='$_POST[nombre]',direccion='$_POST[direccion]',telefono='$_POST[telefono]' 
        WHERE nit='$_POST[codigo]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: empresas.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar  el evento";
 }
 
mysqli_close($conn);



?>