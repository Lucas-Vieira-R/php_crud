<?php
require_once('connDb.php');
# seleciono o id passado pela request
$id = $_GET['id'];
# deleto a entrada com o respectivo id
$sql = "DELETE FROM clientes WHERE id = $id";
mysqli_query($conn, $sql);
# retorno para a pagina de listagem
header('Location: listar_clientes.php');
exit;
?>