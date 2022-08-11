<?php
require '../conexion/conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$query = "SELECT COUNT(*) as contar FROM jefe WHERE usuario = '$usuario' AND clave = '$clave'";
$result = mysqli_query($conn,$query);
$array = mysqli_fetch_array($result);

if($array['contar']>0){
    $_SESSION['usuario'] = $usuario;
    header("location: ../vistas/index.php");
}else{
    echo "DATOS INCORRECTOS";
}


?>