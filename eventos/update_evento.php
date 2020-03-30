<?php
 
// Create connection
require('../configuraciones/conexionbd.php');

//query
$query="UPDATE sede SET direccion='$_POST[direccion]',municipio='$_POST[municipio]',nombre='$_POST[nombre]',telefono='$_POST[telefono]',email='$_POST[email]' WHERE codigo='$_POST[codigo]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: sede.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar  la sede";
 }
 
mysqli_close($conn);



?>