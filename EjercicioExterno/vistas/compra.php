
<?php 
include_once("../conexion/conexion.php");
session_start();
$ID = $_GET['ID'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Prueba</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="registro.php">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ingresar.php">Ingresar Registro</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<form class="" action='../action/actionCompra.php' method="post">
<?php
      $res = mysqli_query ($conn,"SELECT * FROM productos where ID = '$ID'");
      
      
       while($row = mysqli_fetch_array($res)){
      ?>
        <div class="mb-3">
            <label  class="form-label">ID</label>
            <input type="number" class="form-control" readonly onmousedown="return false;" id="ID" name="ID" value="<?=$row[0]?>">
        </div>

        <div class="mb-3">
            <label  class="form-label">Nombre</label>
            <input type="text" class="form-control" readonly onmousedown="return false;" id="nombre" name="nombre" value="<?=$row[1]?>">
        </div>
        <div class="mb-3">
            <label class="form-label">precio</label>
            <input type="number" class="form-control" readonly onmousedown="return false;" id="precio" name="precio"  value="<?=$row[3]?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="number" class="form-control" readonly onmousedown="return false;" id="stock" name="stock"  value="<?=$row[3]?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >Cantidad a comprar</label>
            <?php 
                if ($row[6] <= 0){ 
                    echo ("<script LANGUAGE='JavaScript'>
                    window.alert('No hay stock del producto, volvera al inicio he intentelo con otro producto');
                    window.location.href='../vistas/index.php';
                    </script>");
                } else{
            ?>
            <input type="number" class="form-control" id="cantidad" name="cantidad"  min="1" max="<?=$row[6]?>"> <!--Solo va a permitir la cantidad del stock-->
        </div>
        <div class="mb-3">
            <label class="form-label">Ventas</label>
            <input type="number" class="form-control" readonly onmousedown="return false;" id="ventas" name="ventas"  value="<?=$row[8]?>">
        </div>
        <?php
                }
            }
            ?>
        <input type="submit" id="btn_compra" name="btn_compra" value="Compra" class="btn btn-info text-white">
        
</form>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>