<?php
include_once("../conexion/conexion.php");

$nombre = $_POST['nombre'];
$referencia = $_POST['referencia'];
$precio = $_POST['precio'];
$peso = $_POST['peso'];
$categoria = $_POST['categoria'];
$stock = $_POST['stock'];
$fecha = $_POST['fecha'];


$query = "INSERT INTO productos(nombre,referencia,precio,peso,categoria,stock,fecha) values('$nombre','$referencia','$precio','$peso','$categoria','$stock','$fecha'); ";
if($conn->query($query) ===TRUE){
    header("location:../vistas/index.php");

}else{
    echo "Error:".$quey."<br>".$conn->error;
}



?>