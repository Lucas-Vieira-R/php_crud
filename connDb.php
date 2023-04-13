<?php

 // Conexão com o banco de dados
 $servername = "localhost";
 $username = "admin"; # criei um usuário 'admin' com privilégios para o BD crud_app
 $password = ""; // Sugiro deixar sem
 $db_name = "crud_app";

// Conecta ao servidor MySQL
$conn = mysqli_connect($servername, $username, $password);

// Seleciona o banco de dados
mysqli_select_db($conn, $db_name);


 if (mysqli_connect_error()) {
 echo "erro na conexão: ".mysqli_connect_error();
 }
?>