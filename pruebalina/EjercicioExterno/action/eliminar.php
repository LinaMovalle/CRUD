<?php

include_once("../conexion/conexion.php");
$ID = $_GET['ID'];
$ID = $_POST['ID'];

$query = "DELETE FROM productos WHERE ID = '$ID' ";
if($conn->query($query) ===TRUE){
    header("location:../vistas/index.php");

}else{
    echo "Error:".$query."<br>".$conn->error;
}








?>