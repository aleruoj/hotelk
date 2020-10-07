<?php

include "conexion.php";


$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$tdocumento=$_POST['t_documento'];
$documento=$_POST['documento'];
$email=$_POST['email'];
$celular=$_POST['telefono'];
$convenio=$_POST['convenio'];




$sql = " INSERT INTO huesped ( nombres, apellidos, tipo_de_documento, numero_documento, email, telefono, tipo_convenio) VALUES ('$nombres','$apellidos', '$tdocumento','$documento','$email', '$celular', '$convenio'  )";  
mysqli_query($conexion, $sql);
 
header("location:dashboard.php");

?>