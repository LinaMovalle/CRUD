<?php 
include_once("../conexion/conexion.php");
session_start();

$usuario = $_SESSION['usuario'];

$query = "SELECT * FROM jefe WHERE usuario = '$usuario'";
$result = $conn->query($query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Prueba</a>
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
          <a class="nav-link active" aria-current="page" href="ingresar.php">Ingresar registro</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nombre del producto</th>
      <th scope="col">Referencia</th>
      <th scope="col">Precio</th>
      <th scope="col">Peso</th>
      <th scope="col">Categoria</th>
      <th scope="col">stock</th>
      <th scope="col">Fecha de creación</th>
      <th scope="col">Ventas</th>
    </tr>
  </thead>
    <?php
      $res = mysqli_query ($conn,"SELECT * FROM productos");
      
      
       while($row = mysqli_fetch_array($res)){
      ?>
  <tbody>
    <tr>
      <td id="codigo" name="codigo"><?=$row[0]?></td>
      <td><?=$row[1]?></td>
      <td><?=$row[2]?></td>
      <td><?=$row[3]?></td>
      <td><?=$row[4]?></td>
      <td><?=$row[5]?></td>
      <td><?=$row[6]?></td>
      <td><?=$row[7]?></td>
      <td><?=$row[8]?></td>
      <td><a href= "editar.php?ID=<?php echo $row[0]?>" type="button"  class="btn btn-success">actualizar</a></td>
      <td><a href= "compra.php?ID=<?php echo $row[0]?>" type="button"  class="btn btn-info">compra</a></td>
      <!-- Button trigger modal -->
     <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button></td>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="../action/eliminar.php?ID=<?php echo $row[0]?>" method="POST">

                <input type="hidden" class="form-control" id="ID" name="ID" id="delete_id" value="<?php echo $row[0]?>">
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <input type="submit" name="" value="Eliminar" class="btn btn-danger">
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
      
    </tr>
  </tbody>
</table>

<h2>Consultas DB</h2>
<table class="table">
  <tbody>
  <?php
      $res = mysqli_query ($conn, "SELECT nombre FROM productos WHERE stock = (SELECT MAX(stock ) FROM productos);");
      
      
       while($row = mysqli_fetch_array($res)){
      ?>
    <tr>
      <th scope="row">1</th>
      <td>Producto con más stock?</td>
      <td><?=$row[0]?></td>
    </tr>
    <?php
      }
      ?>
    <?php
      $res = mysqli_query ($conn, "SELECT nombre FROM productos WHERE ventas = (SELECT MAX(ventas) FROM productos);");
      
      
       while($row = mysqli_fetch_array($res)){
      ?>
    <tr>
      <th scope="row">2</th>
      <td>Producto con más ventas?</td>
      <td><?=$row[0]?></td>
    </tr>
    <?php
      }
      ?>
  </tbody>
</table>   
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>