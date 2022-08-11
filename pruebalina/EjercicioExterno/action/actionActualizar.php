<?php
include_once("../conexion/conexion.php");
$ID = $_GET['ID'];
$ID = $_POST["ID"];

$nombre = $_POST['nombre'];
$referencia = $_POST['referencia'];
$precio = $_POST['precio'];
$peso = $_POST['peso'];
$categoria = $_POST['categoria'];
$stock = $_POST['stock'];
$fecha = $_POST['fecha'];



$query = "UPDATE productos SET nombre = '$nombre',referencia = '$referencia',precio = '$precio',peso = '$peso',categoria = '$categoria',stock = '$stock',fecha = '$fecha' WHERE ID = '$ID' ";
if($conn->query($query) ===TRUE){
    header("location:../vistas/index.php");

}else{
    echo "Error:".$quey."<br>".$conn->error;
}




?>