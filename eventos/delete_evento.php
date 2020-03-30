<?php
 
// Create connection
$host = "localhost";
$user = "root";
$pass = "root";
$DB = "trabajobd";
$conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));
//query
$query="delete evento FROM evento
where evento.cod_evento='$_POST[d]'" ;
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: eventos.php");   
 }else{
     echo "Ha ocurrido un error al Eliminar  el evento";
 }
 
mysqli_close($conn);



?>