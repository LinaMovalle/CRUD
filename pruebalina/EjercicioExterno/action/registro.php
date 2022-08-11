<?php
include_once("../conexion/conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$bodega = $_POST['bodega'];


$query = "INSERT INTO jefe (usuario,clave,bodega) values('$usuario','$clave','$bodega'); ";
if($conn->query($query) ===TRUE){
    header("location:../vistas/inicio.php");

}else{
    echo "Error:".$query."<br>".$conn->error;
}



?>