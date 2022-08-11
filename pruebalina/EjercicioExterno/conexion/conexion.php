<?php 
// $con = mysqli_connect('localhost', 'root', '');
// // mysqli_select_db('bodega', $con);


$servername = "localhost";
$username = "root";
$password = "";
$bd = "bodega";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $bd);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>