<?php
$doc = $_POST["documento"];
$clave = $_POST["contrasena"];
// conexión BS 

$conexion = mysqli_connect("localhost", "root", "", "phpfinal");
$consulta = "SELECT * FROM usuario WHERE documento='$doc' and contrasenia='$clave'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);


$row = mysqli_fetch_array($resultado);
$rol = $row['rol'];
$nombre = $row['nombres'];
echo $rol;
if ($filas > 0) {
    
    if ($rol == "administrador") {
        session_start();
        $_SESSION['administrador'] = "$doc";
        header("location:dashboard.php");
        exit();
    }
} else {
    header("location:index.php?error=1");
}
?>