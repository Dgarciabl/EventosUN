﻿<?php
 
// Create connection
$host = "localhost";
$user = "root";
$pass = "root";
$DB = "trabajobd";
$conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));

//query
$query="SELECT *
 FROM empresa natural join  externa";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
mysqli_close($conn);

?>