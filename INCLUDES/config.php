<?php
$server = "refer30";
$user = "desenvolvimento";
$password = "desenvolvimento";
$database = "desenvolvimento";

$con = mysqli_connect($server, $user, $password, $database);

// Checa conexão
if (mysqli_connect_errno()) {
   echo "Falha na conexão com o servido MySQL:  " . mysqli_connect_error();
   exit();
}

?>