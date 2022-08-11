<?php

include_once("../conexion/conexion.php");
$ID = $_POST['ID'];

$query = "DELETE FROM productoS WHERE ID = '$ID' ";
if($conn->query($query) ===TRUE){
    header("location:../vistas/index.php");

}else{
    echo "Error:".$query."<br>".$conn->error;
}








?>