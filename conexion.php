<?php
$conexion = mysqli_connect("localhost", "root", "", "phpfinal");
 
// Check connection
if(!$conexion ){
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}
?>