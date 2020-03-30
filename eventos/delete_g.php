<?php
 
// Create connection
require('../configuraciones/conexionbd.php');

//query
$query="delete FROM garantia where codigo='$_POST[d]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: garantias.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar  la garantia";
 }
 
mysqli_close($conn);



?>





$query="delete marca_proveedora, garantia FROM marca_proveedora 
join garantia
on marca_proveedora.rut=garantia.rut_mp 
where marca_proveedora.rut='$_POST[d]'";