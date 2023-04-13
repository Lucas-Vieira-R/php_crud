<?php
require_once('connDb.php');

// Recebe os dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

// Insere os dados na tabela "clientes"
$query = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', $idade)";
$resultado = mysqli_query($conn, $query);

if ($resultado) {
	echo "Cliente adicionado com sucesso!";
} else {
	echo "Erro ao adicionar cliente: " . mysqli_error($conn);
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
<form action='index.php'>
    <button type='submit'>Retornar para pagina inicial</button>
</form>