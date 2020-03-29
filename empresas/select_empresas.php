<?php
 
// Create connection
require('../configuraciones/conexionbd.php');

//query
$query="SELECT * FROM (empresa natural join externa) natural join contratada;
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

mysqli_close($conn);

?>
