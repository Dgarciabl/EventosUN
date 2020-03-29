<?php
 
// Create connection
require('../configuraciones/conexionbd.php');

//query
$query="delete sede,garantia FROM sede
left join garantia
on sede.codigo=garantia.cod_sede
where sede.codigo='$_POST[d]'" ;
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: sede.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar  la sede";
 }
 
mysqli_close($conn);



?>