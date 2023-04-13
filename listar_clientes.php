<html>
<head>
    <title>Listagem</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<?php
require_once('connDb.php');

# seleciono todos os clientes da tabela cliente
$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conn, $sql);

# utilizo um loop para retornar os valores da query, como dicionario para acessar suas chaves, e adiciono dois botões para realizar o update e delete
while ($cliente = mysqli_fetch_assoc($resultado)) {
	echo $cliente['nome'] .  " " . $cliente['sobrenome'] . " " .  $cliente['email'] . " " . $cliente['idade'] . " <a href='update_clientes.php?id=" . $cliente['id'] . "'>Atualizar</a> <a href='delete_clientes.php?id=" . $cliente['id'] . "'>Excluir</a><br>";
}

mysqli_close($conn);


?>
<form action='index.php'>
    <button type='submit'>Retornar pagina inicial</button>
</form>
</html>