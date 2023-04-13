<html>
<head>
    <title>Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<?php
require_once('connDb.php');

$id = $_GET['id']; #seleciono o atributo ID passado pela requisição, para fazer a query do cliente em questão no Mysql

# query do cliente por id
$sql = "SELECT * FROM clientes WHERE id = $id";
$resultado = mysqli_query($conn, $sql);
$cliente = mysqli_fetch_assoc($resultado);

# checo se a requisição do form abaixo é um postback 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$idade = $_POST['idade'];

	# realizo o update no BD
	$sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = $id";
	mysqli_query($conn, $sql);

	# retorno para lista_clientes.php
	header('Location: listar_clientes.php');
	exit;
}
?>

<!-- Form pré preenchido com as informações adquiridas pela query acima, do id do cliente-->
<form method="POST">
	Nome: <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>"><br>
	Sobrenome: <input type="text" name="sobrenome" value="<?php echo $cliente['sobrenome']; ?>"><br>
	Email: <input type="text" name="email" value="<?php echo $cliente['email']; ?>"><br>
	Idade: <input type="text" name="idade" value="<?php echo $cliente['idade']; ?>"><br>
	<input type="submit" value="Atualizar">
</form>
</html>
