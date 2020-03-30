<?php
 
// Create connection
require('../configuraciones/conexionbd.php');
//query
$query="delete empresa,externa FROM empresa
left join externa
on empresa.nit=externa.nit
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