<?php
 
// Create connection
require('../configuraciones/conexionbd.php');
//query
$query="delete evento FROM evento
where cod_evento='$_POST[d]'" ;
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: eventos.php");   
 }else{
     echo "Ha ocurrido un error al Eliminar  el evento";
 }
 
mysqli_close($conn);



?>