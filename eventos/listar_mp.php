<?php
 
// Create connection
require('../configuraciones/conexionbd.php');
//query
$query="";
	$query="SELECT rut AS ident FROM marca_proveedora";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: garantias.php");
        
         
 	}else{
 		echo "Ha ocurrido un error al crear la garantia";
 	}

?>