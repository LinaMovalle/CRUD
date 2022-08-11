<?php 
include_once("../conexion/conexion.php");
$ID = $_GET['ID'];
$ID = $_POST["ID"];


$stock = $_POST['stock'];
$cantidad = $_POST['cantidad'];
$ventas = $_POST['ventas'];

$query = "UPDATE productos SET  stock = stock -'$cantidad', ventas = '$ventas'+1 WHERE ID = '$ID' ";
if($conn->query($query) ===TRUE){
        echo ("<script LANGUAGE='JavaScript'>

        window.alert('Gracias por comprar');
        window.location.href='../vistas/index.php';
        </script>");

}else{
    echo "Error:".$quey."<br>".$conn->error;
}




?>