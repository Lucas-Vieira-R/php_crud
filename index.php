<!DOCTYPE html>
<html>
<head>
	<title>Meu CRUD em PHP - Lucas Vieira Ribeiro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <!-- pagina inicial de inserção de clientes-->
	<h1>Adicionar novo cliente</h1>
	<form method="POST" action="post_cliente.php">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome"><br>

		<label for="sobrenome">Sobrenome:</label>
		<input type="text" name="sobrenome" id="sobrenome"><br>

		<label for="email">E-mail:</label>
		<input type="email" name="email" id="email"><br>

		<label for="idade">Idade:</label>
		<input type="number" name="idade" id="idade"><br>

		<button type="submit">Adicionar</button>
	</form>
    <!-- Botao para redirecionamento para a listagem de clientes -->
    <h2>Listar Clientes</h2>
    <form method='GET' action="listar_clientes.php">
        <button type='submit'>Listar</button>
    </form>
    <br><br><br>
    &#0169;Lucas Vieira
</body>
</html>