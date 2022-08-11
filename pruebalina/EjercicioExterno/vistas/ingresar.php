<?php 
include_once("../conexion/conexion.php");
session_start();

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
<form class="" action="../action/action.php" method="post">
  <div class="mb-3">
    <label class="form-label">Nombre de producto:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Referencia:</label>
    <input type="text" class="form-control" id="referencia" name="referencia" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">Precio:</label>
    <input type="number" class="form-control" id="precio" name="precio" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Peso:</label>
    <input type="number" class="form-control" id="peso" name="peso" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Categoria: </label>
    <input type="text" class="form-control" id="categoria" name="categoria" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stock: </label>
    <input type="text" class="form-control" id="stock" name="stock" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de creación: </label>
    <input type="date" class="form-control" id="fecha" name="fecha" required>
  </div>
  <input type="submit" name="" value="Enviar registro" class="btn btn-info text-white">
</form>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>