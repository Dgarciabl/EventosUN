<?php
 
// Create connection
$host = "localhost";
$user = "trabajobd";
$pass = "trabajobd";
$DB = "trabajobd";
$conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));
//query
$query="delete empresa,contratada FROM empresa
left join contratada
on empresa.nit=contratada.nit
where empresa.nit='$_POST[d]'" ;
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: empresas.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar  la sede";
 }
 
mysqli_close($conn);



?>