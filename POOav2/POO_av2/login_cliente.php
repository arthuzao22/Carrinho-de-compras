<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome_completo = $_POST['nome_completo'];
$usuario = $_POST['usuario'];
$telefone = $_POST['telefone'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafeteria";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO clientes (email, senha, nome_completo, usuario, telefone)
VALUES ('$email', '$senha', '$nome_completo', '$usuario', '$telefone')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>