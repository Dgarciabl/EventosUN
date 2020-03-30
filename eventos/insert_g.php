<?php
 
// Create connection
require('../configuraciones/conexionbd.php');

$fecha_inicio= $_POST["fecha_inicio"];
$fecha_final= $_POST["fecha_final"];
$cubre_valor= $_POST["cubre_valor"];
//query
if($_POST["identificacion1"]==="" && $_POST["exampleRadios2"]==="marca_proveedora" ){
	echo "Debe seleccioar una opcion valida";
}
elseif($_POST["identificacion2"]==="" && $_POST["exampleRadios2"]==="sede"){
	echo "Debe seleccioar una opcion valida";
}else{
if($cubre_valor>=0){
if($fecha_inicio>$fecha_final){
	echo "fecha inicio debe ser menor a la fecha final";
}
else{
$query="";
if($_POST["exampleRadios2"]==="marca_proveedora"){
   	$query="INSERT INTO garantia(`codigo`, `fecha_inicio`, `fecha_final`, `cubre_valor`, `rut_mp`) 
	VALUES('$_POST[codigo]','$_POST[fecha_inicio]','$_POST[fecha_final]','$_POST[cubre_valor]','$_POST[identificacion1]')";
}
elseif($_POST["exampleRadios2"]==="ninguno"){
		$query="INSERT INTO garantia(`codigo`, `fecha_inicio`, `fecha_final`, `cubre_valor`,`cod_sede`, `rut_mp`) 
	VALUES('$_POST[codigo]','$_POST[fecha_inicio]','$_POST[fecha_final]','$_POST[cubre_valor]',NULL,NULL)";
}
else{
	$query="INSERT INTO garantia(codigo,fecha_inicio,fecha_final,cubre_valor,cod_sede)
 	VALUES('$_POST[codigo]','$_POST[fecha_inicio]','$_POST[fecha_final]','$_POST[cubre_valor]','$_POST[identificacion2]')";
}

	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: garantias.php");
        
         
 	}else{
 		echo "Ha ocurrido un error al crear la garantia";
 	}

}
}
else{
		echo "cubre valores mayores o iguales a 0";
}
}

?>
